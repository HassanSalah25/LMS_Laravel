<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CourseCategory extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
     protected $table = 'CourseCategories';
	public $timestamps = true;

    protected $guarded =[   

    ];

       public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
