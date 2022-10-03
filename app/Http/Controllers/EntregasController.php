<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entregas;

class EntregasController extends Controller
{
    public function index($start = 0, $limit = 10, $orderby = 'created_at', $order = 'asc')
    {
        $entregas = Entregas::skip($start)->take($limit)->orderBy($orderby, $order)->get();
        return response()->json($entregas);
    }
 
    public function search($q = null)
    {
        $entregas = Entregas::where('Nombre', 'like', '%' . $q . '%')
            ->orWhere('Apellidos', 'like', '%' . $q . '%')
            ->orWhere('CorreoElectronico', 'like', '%' . $q . '%')
            ->get();
        return response()->json($entregas);
    }

    public function show($id)
    {
        return Entregas::find($id);
    }

    public function store(Request $request)
    {
        return Entregas::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Entregas = Entregas::findOrFail($id);
        $Entregas->update($request->all());

        return $Entregas;
    }

    public function delete(Request $request, $id)
    {
        $Entregas = Entregas::findOrFail($id);
        $Entregas->delete();

        return 204;
    }
}
