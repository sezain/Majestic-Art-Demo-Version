<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {
  protected $table = 'artists';

  public function categories() {
    return $this->belongsToMany(Category::class);
  }
}