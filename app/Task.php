<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) { ## key is the 'scope' word 

      return $query->where('completed',0);
    }
}
