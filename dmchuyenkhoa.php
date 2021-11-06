<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedmchuyenkhoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmchuyenkhoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('machuyenkhoa',50);
            $table->string('tenchuyenkhoa',150);
            $table->integer('tinhtrang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dmchuyenkhoa');
    }
}
