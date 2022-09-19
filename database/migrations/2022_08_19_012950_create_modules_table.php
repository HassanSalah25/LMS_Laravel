<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('course_id');
            $table->string('name');
            $table->string('position');
            $table->string('is_active');
            $table->string('created_by');
  });
    }

   
}
