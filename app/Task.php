<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) { ## key is the 'scope' word

      return $query->where('completed',0);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment( $body )
    {
        // $comment = Comment::create([
        //     'body' => $body,
        //     'task_id' => $this->id
        // ]);

        $this->comments()->create(compact('body'));
        // return $comment;
    }
}
