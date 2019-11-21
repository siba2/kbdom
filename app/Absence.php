<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $table = 'absence';
    protected $fillable = ["employee_id", "date"];
    public $timestamps = false;
}
