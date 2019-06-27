<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $primaryKey = 'id';
    
    public function LessonUnit(){
        return $this->hasMany('app\LessonUnit');
    }

    public function user(){
        return $this->belongsTo('app\User');
    }
}

