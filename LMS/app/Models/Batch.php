<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $table = 'batches';
	public $timestamps = true;
    protected $guarded =[];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function certification()
    {
        return $this->hasMany(Certification::class);
    }

}
