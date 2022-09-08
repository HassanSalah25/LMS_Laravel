<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     protected $table = 'users';
     protected $guarded =[];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


     // #accepts ALL records  ##Wrong security implement !!


    //  protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'remember_token',
    //     // +----------------+---------------------+------+-----+---------+----------------+
    //     // | Field          | Type                | Null | Key | Default | Extra          |
    //     // +----------------+---------------------+------+-----+---------+----------------+
    //     // | id             | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
    //     // | name           | varchar(255)        | NO   |     | NULL    |                |
    //     // | email          | varchar(255)        | NO   | UNI | NULL    |                |
    //     // | password       | varchar(255)        | NO   |     | NULL    |                |
    //     // | remember_token | varchar(100)        | YES  |     | NULL    |                |
    //     // +----------------+---------------------+------+-----+---------+----------------+

    // ];

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    public function isAdministrator() {
        return $this->roles()->where('name', 'admin')->exists();
    }

}
