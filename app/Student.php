<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // protected $table='students';
     protected $fillable = [
        'studID', 'name', 'email','araby','english','math','science','totaldegree'
    ];
}
