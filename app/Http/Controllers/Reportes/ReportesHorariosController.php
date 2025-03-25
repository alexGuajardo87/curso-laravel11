<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CentrosComputo;
use App\Models\HorariosDisponibles;
use App\Models\HorariosCentrosComputo;


class ReportesHorariosController extends Controller
{
    public function obtenerHorariosAsignados()
    {

        $result = HorariosCentrosComputo::select('Nombre','TotalEquipos','HoraInicial','HoraFinal')
                                  ->join('CentrosComputo as a','HorariosCentrosComputo.IdCentroComputo','a.IdCentroComputo')
                                  ->join('Horarios as b','HorariosCentrosComputo.IdHorarioDisponible','b.IdHorarioDisponible')
                                  ->get();
                        
        return Response()->json($result,200);
    }
}
