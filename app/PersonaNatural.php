<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaNatural extends Persona
{
  protected $attributes = ['nombre'=>null,'sexo'=>null,'fecha_nacimiento'=>null];

  public function persona(){
      return $this->morphOne('Persona', 'personable');
  }
}
