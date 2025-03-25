<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorariosDisponibles extends Model
{
    public $table = "Horarios"; 

    protected $primaryKey = "IdHorarioDisponible";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'HoraInicial','HoraFinal','EstaDisponible'
   ];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
   protected $hidden = [];
}
