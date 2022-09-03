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
			$table->integer('course_id')->nullable()->unsigned();
			$table->integer('batch_id')->nullable()->unsigned();
			$table->integer('staff_id')->nullable()->unsigned();
			$table->integer('student_id')->nullable()->unsigned();
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
