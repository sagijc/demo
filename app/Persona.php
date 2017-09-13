<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $attributes = ['numero_identidad'=>null,'personable_id'=>null, 'personable_type'=>null];
  //protected $table = 'personas';

  public function personable(){
      return $this->morphTo();
  }
}
