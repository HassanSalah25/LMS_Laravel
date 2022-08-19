<?php

use Illuminate\Database\Migrations\Migration;
 use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
			$table->integer('course_id')->unsigned();
			$table->integer('batch_id')->unsigned();
			$table->integer('staff_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->string('title')->nullable();
			$table->string('rating')->nullable();
			$table->longText('review')->nullable();
			$table->tinyInteger('is_active')->default('0');
			$table->timestamps();
			$table->softDeletes();
             
       });
    }

    public function down()
	{
		Schema::drop('feedback');
	}
}
