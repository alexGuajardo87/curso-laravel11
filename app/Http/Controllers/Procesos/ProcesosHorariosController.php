<?php

namespace App\Http\Controllers\Procesos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CentrosComputo;
use App\Models\HorariosDisponibles;
use App\Models\HorariosCentrosComputo;

class ProcesosHorariosController extends Controller
{
    public function insertarHorarioCentroComputo(Request $request)
    {
    
        // ------  pregunto si el id que del centro de computo que quiero guardar exista en la tabla --------- //
        $exiteCentro = CentrosComputo::where('IdCentroComputo',$request->IdCentroComputo)->exists();

            // ------ si la variable $exiteCentro no trae valor regresar mensaje al usuario ----- //
            if(!$exiteCentro){
                return Response()->json(["Error" => true, "Mensaje" => "El id del centro de computo no existe"],422);
            }

        // ------------------------------------------------------------------------------------------------- //

        $existeHorario= HorariosDisponibles::where('IdHorarioDisponible',$request->IdHorario)->exists();

            if(!$existeHorario){
                return Response()->json(["Error" => true, "Mensaje" => "El id de horario no existe"],422);
            }


        $existeRegistro = HorariosCentrosComputo::where('IdCentroComputo',$request->IdCentroComputo)
                                                  ->where('IdHorarioDisponible',$request->IdHorario)
                                                  ->exists();

            if($existeRegistro){
                return Response()->json(["Error" => true, "Mensaje" => "El centro de computo ya tiene asignado este horario"],422);
            }


        $result =  HorariosCentrosComputo::create([
            "IdCentroComputo" =>  $request->IdCentroComputo,
            "IdHorarioDisponible" =>  $request->IdHorario
        ]);
        
        return Response()->json(["Error" => false, "Mensaje" => "Se asigno el horario"],422);
    }
}
