<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    public function LearningObject(){
        return $this->belongsToMany(LearningObject::class,'learning_object_concept', 'learning_object_id', 'concept_id');
    }
}
