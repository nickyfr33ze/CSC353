<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //Create our table
    {
        Schema::create('lectures', function (Blueprint $table) { //Passes in a closure known as 'Blueprint'
            $table->id();   //This is where you can find all of laravel's available types 'https://laravel.com/docs/8.x/migrations#available-column-types'
            $table->string('speaker_name');     //Limited to 260 characters
            $table->string('title');    //Limited to 260 characters ; these are used to save resources in memory
            $table->text('outline');    //Limited to 2GB of string data
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
        Schema::dropIfExists('lectures');
    }
}
