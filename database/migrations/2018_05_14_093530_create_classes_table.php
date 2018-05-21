<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classes_name');
            $table->integer('duration');
            $table->string('description');
            $table->integer('cost');
            $table->string('contact');
            $table->string('city');
            $table->integer('cp');
            $table->string('tel');
            $table->string('mail');
            $table->string('address');
            $table->integer('job_id');
            $table->string('link');
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
        Schema::dropIfExists('classes');
    }
}
