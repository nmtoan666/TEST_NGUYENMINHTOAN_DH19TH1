<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class dmchuyenkhoaController extends Controller
{
    public function index(Request $request)
    {
        //hiển thị theo ý muốn khi lấy dư liệu về
        $userList = DB::table('dmchuyenkhoa')
        ->orderBy('created_at','asc') 
        ->paginate(10);
        return view('Modal.dmchuyenkhoa.index')->with([
            'userList' => $userList,
        ]);

    }
    public function viewAdd(Request $request)
    {
        return view('Modal.dmchuyenkhoa.viewadd');
    }
    public function postAdddmchuyenKhoa(Request $request)
    {
        //check validate
        $nickname = $request->nickname;
        $dmchuyenkhoaList = DB::table('dmchuyenkhoa')
            ->where('id', $id)
            ->get();
        if ($dmchuyenkhoaList != null && count($dmchuyenkhoaList) > 0) {
            return 'error';
        }
        DB::table('dmchuyenkhoa')->insert([
            'id' => $request->id,
            'machuyenkhoa' => $request->machuyenkhoa,
            'tenchuyenkhoa' => $request->tenchuyenkhoa,
            'tinhtrang' => $request->tinhtrang,
            
        ]);
        return redirect()->route('viewdmchuyenkhoaList');

    }
}
