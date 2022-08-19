<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
<<<<<<< HEAD
<<<<<<< HEAD
            $table->strings('name');
            $table->strings('postion');
            $table->strings('is_active');
=======
>>>>>>> parent of 9ca842c (add new  and relaions DB)
=======
            $table->strings('name');
            $table->strings('postion');
            $table->strings('is_active');
>>>>>>> parent of 0c72dba (modify migeration)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
