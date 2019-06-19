<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LearningObjectLessonUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_object_lesson_unit', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('learning_object_id');
        $table->integer('lesson_unit_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_object_lesson_unit');
    }
}
