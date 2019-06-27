<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class LessonUnit extends Model
{
    public function LearningObject(){
        return $this->belongsTo(LearningObject::class,'learning_object_lesson_unit', 'learning_object_id', 'lesson_unit_id');
    }
    
}
