<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
         'nome' => 'required|max:100',
         'email' => 'required|max:100',
         'sexo' => 'required|max:50',
     ]);
     $usuario = usuario::create($validatedData);  

     return $usuario;
     //return redirect('/api/usuarios')->with('success', 'usuario cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$usuario = Usuario::where('id',$id)->first();
        return $usuario;*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuario::find($id);
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    $validatedData = $request->validate([
         'nome' => 'required|max:100',
         'email' => 'required|max:100',
         'sexo' => 'required|max:50',
     ]);
     
     $usuario = usuario::find($id);
     $usuario->nome  = $request->input('nome');
     $usuario->email = $request->input('email');
     $usuario->sexo  = $request->input('sexo');
     $usuario->save();       
     return $usuario; 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuario::find($id);
        $usuario->delete();
        return 'apagou';
    }
}
