<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorariosCentrosComputo extends Model
{
    public $table = "HorariosCentrosComputo"; 

    protected $primaryKey = "IdHorarioCentroComputo";

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IdCentroComputo','IdHorarioDisponible'
   ];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
   protected $hidden = [];
}
