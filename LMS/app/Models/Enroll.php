<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{   
    use HasFactory;
    protected $table = 'enroll_students';
	public $timestamps = true;
    protected $guarded =[];

}
