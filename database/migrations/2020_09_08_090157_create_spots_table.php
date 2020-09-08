<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place');
            $table->string('address');
            $table->string('budget');
            $table->unsignedInteger('averageTime');
            $table->string('regularHoliday');
            $table->string('businessHours');
            $table->string('genre');
            $table->string('keyword');
            $table->string('season');
            $table->string('title');
            $table->string('overview');
            $table->string('comment');
            $table->unsignedInteger('like');
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
        Schema::dropIfExists('spots');
    }
}
