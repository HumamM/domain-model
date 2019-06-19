<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function LessonUnit(){
        return $this->hasMany('app\LessonUnit');
    }
}

