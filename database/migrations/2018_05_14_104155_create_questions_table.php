<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
<<<<<<< HEAD
=======
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3')->nullable();
            $table->string('answer4')->nullable();
            $table->string('answer5')->nullable();
            $table->string('answer6')->nullable();
>>>>>>> ef4a243057565c0246686ea9797a8790b7bec5db
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
        Schema::dropIfExists('questions');
    }
}
