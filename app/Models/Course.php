<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'status',
        'link',
        'track_id',   
        ];

        public function photo() {
            return $this->morphOne('App\Models\Photo','photoable');
        }

        public function video(){
            return $this->hasMany('App\Models\Video');
        }
        public function track(){
            return $this->belongsTo('App\Models\Track');
        }
        public function quiz(){
            return $this->hasMany('App\Models\Quiz');
        }
        public function user(){
            return $this->belongsToMany('App\Models\User');
        }
}
