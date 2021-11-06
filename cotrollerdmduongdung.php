<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class dmduongdungController extends Controller
{
    public function index(Request $request)
    {
        //hiển thị theo ý muốn khi lấy dư liệu về
        $userList = DB::table('dmduongdung')
        ->orderBy('created_at','asc') 
        ->paginate(10);
        return view('Modal.dmduongdung.index')->with([
            'userList' => $userList,
        ]);

    }
    public function viewAdd(Request $request)
    {
        return view('Modal.dmduongdung.viewadd');
    }
    public function postAdddmduongdung(Request $request)
    {
        //check validate
        $nickname = $request->nickname;
        $dmduongdungList = DB::table('dmduongdung')
            ->where('id', $id)
            ->get();
        if ($dmduongdungList != null && count($dmduongdungList) > 0) {
            return 'error';
        }
        DB::table('dmduongdung')->insert([
            'id' => $request->id,
            'maduongdung' => $request->maduongdung,
            'tenduongdung' => $request->tenduongdung,
            'tinhtrang' => $request->tinhtrang,
            
        ]);
        return redirect()->route('viewdmduongdungList');

    }
}
