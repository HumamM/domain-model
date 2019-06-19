<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class LearningObject extends Model
{
    public function lessonUnit(){
        return $this->belongsToMany(LessonUnit::class, 'learning_object_lesson_unit', 'learning_object_id', 'lesson_unit_id');
    }

    public function Concepts(){
        return $this->belongsToMany(Concepts::class, 'learning_object_concept', 'learning_object_id', 'concept_id');
    }

    public function SemanticRelationship(){
        return $this->belongsToMany(SemanticRelationship::class, 'learning_object_symantic_relationship', 'learning_object_id', 'symantic_relationship_id');
    }
}
