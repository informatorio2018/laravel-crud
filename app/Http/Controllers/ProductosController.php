<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use Image;
class ProductosController extends Controller
{

    public function __construct(){
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productos = Producto::orderBy('created_at','desc')->paginate(3);
       
        return view('productos.index',compact('productos'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
         return view('productos.create',compact('categorias'));
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

      

        $producto = new Producto;


        $producto->producto= $request->producto;
        $producto->descripcion = $request->descripcion;
        $producto->codArt = $request->codArticulo;

        $producto->categoria_id =$request->categoria_id;

        $producto->foto = '\img\\'.$tmp_name;


        $producto->save();

        return redirect('/productos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function random_string(){

        $key = '';
        $keys = array_merge(range('a', 'z'),range(0, 9));

        for ($i=0; $i <10 ; $i++) { 
            $key .= $keys[array_rand($keys)];
            }

        return $key;

        }
}
