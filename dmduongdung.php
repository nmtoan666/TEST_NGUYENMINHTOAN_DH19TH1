<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedmduongdungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dmduongdung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maduongdung',50);
            $table->string('tenduongdung',150);
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
        Schema::dropIfExists('dmduongdung');
    }
}
