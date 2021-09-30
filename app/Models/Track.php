<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
       
    ];
    public function course(){
        return $this->hasMany('App\Models\Course');
    }
    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
}
