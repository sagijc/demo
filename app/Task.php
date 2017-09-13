<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Brexis\LaravelWorkflow\Traits\WorkflowTrait;

class Task extends Model
{
    use WorkflowTrait;
    protected $attributes = ['body'=>null, 'completed'=>null ];

    protected $casts = [
        'workflowState' => 'array'
    ];

    public function scopeIncomplete($query) { ## key is the 'scope' word

      return $query->where('completed',0);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
