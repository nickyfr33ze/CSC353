<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //This disables the built in protection for all of the table EXCEPT for id() as we do not this table edited ; there is another option to list out every class to disable but it is more tedious

    $newLecture = Lecture::create([
       'speaker_name' => 'Nick',
       'title' => 'Getting started with Laravel'
       'outline' => 'This is my outline '
       //this is all an example of MassAssignment
    ])
}
