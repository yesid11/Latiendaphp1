<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categorias;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seleccionar todos los productos
        $productos=Producto::all();
        //mostrar vista del catalogo de productos 
        //llevando la lista de productos
        return view ('productos.index')
        ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar todas las marcas 
       $marcas = Marca::all();

       //Seleccionar todas las categorias
       $Categorias = Categorias::all();

       //Mostrar la vista de nuevo producto
       return view('productos.create')
       ->with('marcas',$marcas)
       ->with('categorias', $Categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validaciones 
        //establecer reglas de validación

        $reglas=[
            "nombre" => 'required|alpha|unique:productos,nombre',
            "Descripcion" => 'required|min:5|max:20',
            "Precio" => 'required|numeric',
            "imagen" => 'required|image',
            "marca" => 'required',
            "categoria"=> 'required'
        ];

        //crear el objeto validador

        $v= Validator::make($request ->all() , $reglas );

        //Validar 
      if($v->fails()){
        //Sila validacion falló
        //redirigirme a la vista de create(ruta: productos/create)
        return redirect('productos/create')
                ->withErrors($v);
      }else{
        //examinar el archivo cargado

        $archivo=$request->imagen;
        //obtener el nombre original del archivo

        $nombre_archivo = $archivo->getClientOriginalName();

        //establecer la ubicación

        $ruta=public_path()."/img";
        //mover el archivo de imagen a la ubicacion y nombre deseados
        $archivo->move($ruta , $nombre_archivo);

        //Crear nuevo producto
        $p = new Producto();
        $p->nombre = $request->nombre;
        $p->Descripcion =$request->Descripcion;
        $p->Precio =$request->Precio;
        $p->marca_id=$request->marca;
        $p->categoria_id=$request->categoria;
        $p->imagen = $nombre_archivo;
        //grabar productos
        $p-> save();
        //redirigir a producto/create
        //con un mensaje de exito
        return redirect('productos/create')
            ->with('mensaje', 'Producto registrado exactamente');

      };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aqui va  el detalle del producto con id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo"Mostrar el formulario de edicion";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
