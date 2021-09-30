<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
        'score',
        'phone',
        'address',
    ];
    public function photo() {
        return $this->morphOne('App\Models\Photo','photoable');
    }
    public function quiz(){
        return $this->belongsToMany('App\Models\Quiz');
    }
    public function track(){
        return $this->belongsToMany('App\Models\Track');
    }
    public function course(){
        return $this->belongsToMany('App\Models\Course');
    }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
