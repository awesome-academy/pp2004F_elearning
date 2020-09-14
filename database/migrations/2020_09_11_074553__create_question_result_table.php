<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_result', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('result_id')->unsigned()->nullable();
            $table->foreign('result_id')->references('id')
                  ->on('results')->onDelete('cascade');
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')
                  ->on('questions')->onDelete('cascade');
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
        Schema::dropIfExists('question_result');
    }
}
