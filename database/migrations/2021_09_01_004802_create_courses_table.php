<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_presence');
            $table->biginteger('teacher_id')->unsigned();
            $table->biginteger('room_id')->unsigned();
            $table->biginteger('grade_subject_id')->unsigned();
            $table->biginteger('student_id')->unsigned();
            $table->time('begin_hour');
            $table->time('end_hour');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('grade_subject_id')->references('id')->on('grade_subjects');
            $table->foreign('student_id')->references('id')->on('students')->onDelete("cascade");
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
