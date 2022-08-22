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
            //$table->foreignkey
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('cover_image');
            $table->string('hours');
            $table->string('certificate_image');
            $table->string('position');
            $table->string('is_active');
                $table->string('student_id');
            $table->string('created_by');

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
