<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffList extends Model
{
    protected $table = 'staffinfo';
    protected $primaryKey = 'StaffName';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['StaffName', 'Telephone', 'Address', 'Role'];
}
