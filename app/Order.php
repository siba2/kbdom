<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ["agreement_id","assortment_id","current_quantity","quantity"];
    public $timestamps = false;
}
