<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Enroll extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'enrolls';
	public $timestamps = true;
    protected $guarded =[];

    /**
     * Get all of the student for the Enroll
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get all of the course for the Enroll
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course(): HasMany
    {
        return $this->hasMany(Course::class); 
    }
}

