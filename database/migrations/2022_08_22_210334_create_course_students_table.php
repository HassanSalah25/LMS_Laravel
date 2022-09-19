<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        $table->unsignedBigInteger('user_id');
//        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        Schema::create('course_students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('course_id');//->unique()->fore;
            $table->string('student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_students');
    }
}
