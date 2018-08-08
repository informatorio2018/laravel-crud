<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Image;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clientes = Cliente::orderBy('created_at','desc')->paginate(5);
        $clientes = Cliente::orderBy('created_at','des')->paginate(5);
        
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta = public_path().'/img/';

        $imagenOriginal = $request->file('foto');


        $imagen = Image::make($imagenOriginal);

        $imagen->resize(320,240);
        // nombre.ext

        $tmp_name = $this->random_string().'.'.$imagenOriginal->getClientOriginalExtension();


        $imagen->save($ruta.$tmp_name,100);


        // $cliente = new Cliente;

        // $cliente->nombre= $request->nombre;
        // $cliente->direccion = $request->direccion;

        // $cliente->save();

        // return redirect('/clientes');


    }

    public function random_string(){

        $key = '';
        $keys = array_merge(range('a', 'z'),range(0, 9));

        for ($i=0; $i <10 ; $i++) { 
            $key .= $keys[array_rand($keys)];
            }

        return $key;

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.show',compact('cliente'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cliente = Cliente::find($id);
         return view('clientes.edit',compact('cliente'));
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
      

        $cliente = Cliente::find($id);
        // $cliente->fill($request->all())->save();
        // return redirect()->route('clientes.index');

        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
       
        $cliente->save();
         return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();
        return redirect('/clientes');
    }
}
