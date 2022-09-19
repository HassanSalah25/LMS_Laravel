<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->id();
			$table->integer('position')->nullable();
			$table->string('name');
			$table->string('is_active');
			$table->string('course_id');
            $table->timestamps();

            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('course_category');
	}
}

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint ;



//         class CreateCategoriesTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('categories', function (Blueprint $table) {
//             $table->id();
//             $table->timestamps();
//             $table->strings('name');
//             $table->strings('postion');
//             $table->strings('is_active');
 
            
//          });
//     }

    
// }
