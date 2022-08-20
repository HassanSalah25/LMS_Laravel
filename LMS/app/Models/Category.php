<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = true ;
    use HasApiTokens, HasFactory, Notifiable;

    protected $guraded = [

    ];

      /**
     * Get the batch that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coursesCategory(): BelongsTo
    {
        return $this->belongsTo(courses_category::class);
    }


}
