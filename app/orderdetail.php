<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table = 'orderdetail';
    protected $primaryKey = null;
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['OrderID','ProductName','Quantity','Price'];
}
