<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
       //
       protected $primaryKey = 'docente_id';

       public function cursos()
       {
           return $this->hasMany('App\Models\Curso');
       }
}
