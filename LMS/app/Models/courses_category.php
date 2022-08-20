<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses_category extends Model
{
    use HasFactory;
    protected $table = 'courses_categories';
	public $timestamps = true;
    protected $guarded =[];
     public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
