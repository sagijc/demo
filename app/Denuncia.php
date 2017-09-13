<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Brexis\LaravelWorkflow\Traits\WorkflowTrait;

class Denuncia extends Model
{
    use WorkflowTrait;
    protected $attributes = ['titulo'=>null];    
}
