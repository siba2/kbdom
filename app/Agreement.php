<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $table = 'agreement';
    protected $fillable = ["contractor_id", "name"];
    public $timestamps = false;
}
