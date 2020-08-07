<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('quantity');
            $table->integer('price');
            $table->longText('description');
            $table->string('place'); /*dia diem hoc/ phong hoc*/
            $table->date('timeStart');
            $table->date('timeEnd');
            $table->text('image');
            $table->string('teacher');/* moi quan he 1-nhieu voi table teacher*/
            $table->smallInteger('status'); /*tinh trang khoa hoc: ex:0-chua mo; 1-dang hoc, 2-finish, ...*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
