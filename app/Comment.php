<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

  // protected $guarded = ['body', 'task_id'];
  protected $fillable = ['body', 'task_id'];

  public function task()
  {
      return $this->belongsTo(Task::class);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function ratings()
  {
      return $this->hasMany(Rating::class);
  }

}
