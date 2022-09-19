<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('course_id')->nullable();
			$table->string('batch_id')->nullable();
			$table->string('staff_id')->nullable();
			$table->string('student_id')->nullable();
			$table->string('title')->nullable();
			$table->string('rating')->nullable();
			$table->string('review')->nullable();
			$table->integer('is_active')->default('0');
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
        Schema::dropIfExists('feedback');
    }
}
