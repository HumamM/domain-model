<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class SemanticRelationship extends Model
{
    public function LearningObject(){
        return $this->belongsToMany(LearningObject::class,'learning_object_symantic_relationship', 'learning_object_id', 'symantic_relationship_id');
    }
}
