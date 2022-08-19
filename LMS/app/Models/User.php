<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';
	public $timestamps = true;

	// use SoftDeletingTrait;

	// protected $dates = ['deleted_at'];
	// protected $fillable = array('name', 'email', 'mobile', 'password', 'role_id', 'is_active');

   
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


     // #accepts ALL records  ##Wrong security implement !!
    protected $guarded =[];


    //  protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'password',

    //     // $table->id();
    //     //     $table->string('name');
    //     //     $table->string('email')->unique();
    //     //     $table->timestamp('email_verified_at')->nullable();
    //     //     $table->string('password');
    //     //     $table->rememberToken();
    //     //     $table->timestamps();
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
