<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Methode extends Model
{
    protected $table = 'methode';
    protected $primaryKey = 'id';
    protected $fillable = ['methode_name'];
    public $timestamps = false;
}
