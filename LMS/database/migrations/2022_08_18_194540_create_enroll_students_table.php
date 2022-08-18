<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->integer('course_id')->unsigned();
			$table->integer('batch_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->enum('type', array('0', '1'))->nullable();
			$table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroll_students');
    }
}
