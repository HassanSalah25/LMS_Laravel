<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email');//->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('mobile');
            $table->boolean('logout')->default(false);
            // $table->string('password');
			// $table->integer('role_id');
			// $table->tinyInteger('is_active')->default('1');
			// $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
