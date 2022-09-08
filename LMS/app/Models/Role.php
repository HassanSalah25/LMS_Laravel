<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    public $timestamps = true ;
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded =[];
    protected $fillable =[
        'name'

    ];

}
