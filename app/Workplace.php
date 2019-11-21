<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    protected $table = 'workplace';
    protected $fillable = ["name"];
    public $timestamps = false;
}
