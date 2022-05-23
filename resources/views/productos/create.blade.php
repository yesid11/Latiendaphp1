@extends('layouts.principal')

@section('contenido')



    <form class="col s8" method="POST" action="{{ route('productos.store') }}">
      @csrf
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
                 class="validate"
                 name="nombre">
          <label for="Nombre">Nombre del producto</label>
        </div>
       
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
            id="Descripcion" 
            type="text" 
            class="validate"
            name="Descripcion">
          <label for="Descripcion">Descripcion</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
            id="Precio"
            type="number" 
            class="validate"
            name="Precio">
          <label for="Precio">Precio</label>
        </div>
      </div>
      <div class="row">
          <div class="col s8 input-field">
              <select name="marca" id="marca">
                  <option>
                    Elija la marca del producto
                  </option>
                  @foreach($marcas as $marca)
                  <option value="{{ $marca->id }}" >
                    {{ $marca->Nombre }}
                  </option>
                  @endforeach
              </select>
              <label>Materialize Select</label>
            </div>
          </div>
          <div class="row">
            <div class="col s8 input field">
              <select name="categoria" id="categoria">
                  @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->Nombre}}
                    </option>
                  @endforeach
              </select>
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
    <button class="btn waves-effect waves-light" type="submit">Guardar</button>
    </form>
  

  @endsection