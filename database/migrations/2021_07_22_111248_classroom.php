<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classroom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('classroom',function(Blueprint $table) {
            //$table->id();//thích cái nào
            $table->increments('idClassroom');//thì chọn , khi để increment thì tự động sẽ thành PK
            $table->string('nameClassroom',50);
           
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('classroom');
    }
}
