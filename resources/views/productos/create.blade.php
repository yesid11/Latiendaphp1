@extends('layouts.principal')

@section('contenido')



    <form class="col s8">
        <div class="row">
            <div class="col s8">
                <h1 class="teal-text text-darken-4">
                    Nuevo producto
                </h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre del producto" 
                 id="Nombre" 
                 type="text" 
                 class="validate">
          <label for="Nombre">Nombre del producto</label>
        </div>
       
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
            id="Descripcion" 
            type="text" 
            class="validate">
          <label for="Descripcion">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
            id="Precio"
            type="number" 
            class="validate">
          <label for="Precio">Precio</label>
        </div>
      </div>
    <div class="row">
      <div class="file-field input-field">
      <div class="btn">
        <span>Inserte imagen....</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>  
    </div>
      <div class="row">
        <div class= "col s8">
            <a class="waves-effect waves-light btn">Guardar</a>
        </div>
      </div>
    </form>
  

  @endsection