<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    protected $table = 'userinfor';
    protected $primaryKey = 'Email';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['Email', 'Name', 'Telephone', 'Address', 'Role', 'Password'];
}
