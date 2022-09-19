<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
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
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    public function isStaff() {
        return $this->roles()->where('name', 'staff')->exists();
    }
    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
 }
