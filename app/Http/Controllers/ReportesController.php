<?php

namespace App\Http\Controllers;
use App\Models\CentrosComputo;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function getBuscaCentrosComputo(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous() .'#contact')
                    ->withErrors($validator)
                    ->withInput();
        }
        

        $centrosComputo = CentrosComputo::select('TotalEquipos')->get();
        
        return response()->json($centrosComputo, 200);
    }
}
