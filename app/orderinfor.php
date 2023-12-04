<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderinfor extends Model
{
    protected $table = 'orderinfor';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Email','Address','Date','TotalPrice','Telephone','id','Name'];
}
