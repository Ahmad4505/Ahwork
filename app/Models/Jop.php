<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    use HasFactory;

    protected $guarded=[];

    function user(){
        return $this->belongsTo(User::class)->withDefault();
    }
    function projects(){
        return $this->belongsTo(project::class)->withDefault();
    }
    function reviews(){
        return $this->hasOne(Review::class);
    }
}
