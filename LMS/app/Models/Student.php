<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
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
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
     public function batch(): BelongsTo
    {
        return $this->hasMany(Batch::class);
    }
    public function courseStudent(): BelongsTo
    {
        return $this->hasMany(CourseStudent::class);
    }
}
