<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LearningObjectSymanticRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_object_symantic_relationship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('learning_object_id');
            $table->integer('symantic_relationship_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_object_symantic_relationship');
    }
}
