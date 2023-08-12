<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;

    protected $guarded=[];
    function role(){
        return $this->belongsTo(Role::class)->withDefault();
    }
}
