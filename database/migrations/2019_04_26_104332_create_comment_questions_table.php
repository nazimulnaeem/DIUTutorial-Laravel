<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('comment');
            $table->foreign('question_id')
                ->references('id')->on('questions')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('comment_questions');
    }
}
