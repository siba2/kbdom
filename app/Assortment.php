<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assortment extends Model
{
    protected $table = 'assortment';
    protected $fillable = ["name", "iu"];
    public $timestamps = false;
}
