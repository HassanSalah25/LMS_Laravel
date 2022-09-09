<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $table = 'students';
	public $timestamps = true;
    protected $guarded =[];
    protected $fillable =
        ["name", 'email', 'password'];
     /**
     * Get the batch that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    public function isStudent() {
        return $this->roles()->where('name', 'student')->exists();
    }
     public function courses()
    {
        return $this->belongsToMany(Course::class,'course_students');
    }
     public function batch(): BelongsTo
    {
        return $this->belongsto(Batch::class);
    }
    public function enroll(): BelongsTo
    {
        return $this->hasMany(Enroll::class);
    }

    public function feedback(): BelongsTo
    {
        return $this->hasone(Feddback::class);
    }
}
