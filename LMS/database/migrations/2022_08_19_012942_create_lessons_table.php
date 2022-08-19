<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 0c72dba (modify migeration)
            $table->strings('module_id');
            $table->strings('name');
            $table->strings('description');
            $table->strings('position');
            $table->strings('is_active');
            
            
=======
>>>>>>> parent of 9ca842c (add new  and relaions DB)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
