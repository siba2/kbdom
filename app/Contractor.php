<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $table = 'contractor';
    protected $fillable = ["name"];
    public $timestamps = false;
}
