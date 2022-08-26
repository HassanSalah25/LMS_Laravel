<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Course extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'courses';
	public $timestamps = true;
    protected $guarded =[

    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function module()
    {
        return $this->hasMany(Module::class);
    }

    public function Category(): BelongsTo
    {
        return $this->belongsto(Category::class);
    }

    public function courseStudent(): BelongsTo
    {
        return $this->hasMany(CourseStudent::class);
    }

    public function enroll(): BelongsTo
    {
        return $this->hasMany(Enroll::class);
    }
    public function staff(): HasOne
    {
        return $this->hasOne(Staff::class);
    }
}
