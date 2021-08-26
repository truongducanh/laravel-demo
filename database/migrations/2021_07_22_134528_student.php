<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('student',function(Blueprint $table) {
            //$table->id();//thích cái nào
            $table->increments('idStudent');//thì chọn , khi để increment thì tự động sẽ thành PK
            $table->string('nameStudent',150);
            //boolean là kiểu dữ liệu chỉ lưu dc 2 giá trị giống tinyint
            $table->boolean('gender');
            /*để kiểu dữ liệu là unsignedInteger vì idClassroom để là increments 
            thì attributes mặc định là unsignedInteger
            +)vì để nối dc FK thì kiểu dữ liệu và các giá trị khác
            phải giống nhau hoàn toàn
             */
             $table->unsignedInteger('idClassroom');
             $table->foreign('idClassroom')->references('idClassroom')->on('classroom');
             /*nếu ta chạy FK ở bảng này trước bảng classroom sau thì sẽ bị lỗi vì 
             nó tìm theo FK và không thấy bảng classroom vì bảng classroom tạo sau bảng student
            vì vậy để fix ta cần sửa thời gian ở tên file sao cho bảng classroom dc chạy trước
             */
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //dropIfExists là nếu có tồn tại bảng thì drop
        schema::dropIfExists('student');
    }
}
