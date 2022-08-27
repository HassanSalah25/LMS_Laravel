<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guraded = [];

    /**
   * Get the batch that owns the Student
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function course(): BelongsTo
  {
      return $this->hasMany(Course::class);
  }
}
