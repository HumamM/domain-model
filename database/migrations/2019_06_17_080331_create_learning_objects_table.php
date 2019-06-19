<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->longText('description');
            $table->mediumText('learning_task');
            $table->string('taxonomy');
            $table->string('linguistic_requirement');
            $table->enum('learning_mode',['independent', 'collaborative', 'group work', 'mixed']);
            $table->string('interactivity_type');
            $table->integer('expected_learning_time_minutes');
            $table->enum('media_format',['text', 'audio', 'simulation', 'video', 'multimedia']);
            $table->string('activity_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_objects');
    }
}
