<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('remember_token');
			$table->string('mobile');
			$table->string('email');//->unique();
			$table->string('password');
 			$table->decimal('balance_amount', 10,2)->default('0.00');
			$table->tinyInteger('is_enrolled')->default('0');
			$table->tinyInteger('is_active')->default('1');
			$table->tinyInteger('is_balance')->default('0');

			$table->timestamps();
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
        Schema::dropIfExists('students');
    }
}
