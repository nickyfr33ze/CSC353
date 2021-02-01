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
            $table->string('speaker_name');     //Limited to 260 characters ; translated to a varchar character type ; has ability to be indexed and optimized in search type queries in MySQL
            $table->string('title');    //Limited to 260 characters ; these are used to save resources in memory
            $table->text('outline');    //Limited to 2GB of string data
            $table->timestamps();   //These types all depend on what exactly you are storing in your DB ; a name would do fine as a string type ; a lecture may be better as text 
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
