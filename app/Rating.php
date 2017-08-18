<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  protected $fillable = ['puntaje', 'comment_id'];

  public function comment()
  {
      return $this->belongsTo(Comment::class);
  }

}
