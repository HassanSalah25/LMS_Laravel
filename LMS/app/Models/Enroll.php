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

    use HasFactory;
    protected $table = 'enroll_students';
	public $timestamps = true;
    protected $guarded =[];

}
