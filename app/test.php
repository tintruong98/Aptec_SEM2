<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'string';
    // public $incrementing = false;
}
