<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        
        return \response($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoria' => 'required',
            'descripcion' => 'required',
            
        ]);

        $categorias = Categoria::create($request->all());

        return \response($categorias);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCategoria)
    {
        
        $categorias = Categoria::findOrFail($idCategoria);

        return \response($categorias);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCategoria)
    {
        
        $categorias = Categoria::find($idCategoria)->update($request->all());

        return \response("La categoria N° ${idCategoria} ha sido actualizada");
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCategoria)
    {
        Categoria::destroy($idCategoria);

        return \response("La categoría con el id: ${idCategoria} ha sido eliminada");
    
    }

    public function edit($idCategoria)
    {
        
        $categorias = Categoria::find($idCategoria);
  
        return response()->json($categorias);
    
    }
}
