<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentrosComputo extends Model
{
    public $table = "centroscomputo"; 

    protected $primaryKey = "IdCentroComputo";

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre','TotalEquipos'
   ];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
   protected $hidden = [];
}
