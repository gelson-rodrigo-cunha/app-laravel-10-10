<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     protected $fillable = [
     	'titleTask',
     	'descriptionTask',
     	'startTask',
     	'endTask',
     	'startTaskuser',
     	'startTasklatitude',
     	'startTasklongitude',
     	'endTasklatitude',
     	'endTasklongitude',
     	'statusTask',
     	'titleTask',
     	'idUser'
     ];
}

