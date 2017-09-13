<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaJuridica extends Persona
{
  protected $attributes = ['nombre_juridico'=>null,'numero_identidad_apoderado_legal'=>null];

  public function persona(){
      return $this->morphOne('Persona', 'personable');
  }
}
