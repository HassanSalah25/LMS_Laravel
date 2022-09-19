<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Batch extends Model
{
    use HasFactory;
    protected $table = 'batches';
	public $timestamps = true;
    protected $guarded =[];
    use HasApiTokens, HasFactory, Notifiable;

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function certification()
    {
        return $this->hasMany(Certification::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
