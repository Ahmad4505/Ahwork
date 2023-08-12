<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $guarded=[];

    function user(){
        return $this->belongsTo(User::class);
    }

    function skills(){
        return $this->belongsToMany(skill::class);
    }
    function proposals(){
        return $this->hasMany(Proposal::class);
    }
    function job(){
        return $this->hasOne(Jop::class);
    }
}
