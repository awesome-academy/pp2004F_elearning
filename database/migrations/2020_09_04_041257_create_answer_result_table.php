<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_result', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('result_id')->unsigned()->nullable();
            $table->foreign('result_id')->references('id')
                  ->on('results')->onDelete('cascade');
            $table->bigInteger('answer_id')->unsigned()->nullable();
            $table->foreign('answer_id')->references('id')
                  ->on('answers')->onDelete('cascade');
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
        Schema::dropIfExists('answer_result');
    }
}
