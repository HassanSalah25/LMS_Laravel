<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $table = 'staffs';
	public $timestamps = true;
    protected $guarded =[];

    /**
     * Get the course associated with the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
 }
