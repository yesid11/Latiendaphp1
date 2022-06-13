@extends('layouts.principal')

@section('contenido')



    <form class="col s8" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
      @csrf
      @if(session('mensaje'))
      <div class="row">
        <strong>{{session('mensaje') }}</strong>
      </div>
      @endif
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
          <strong class="cyan-text text-darken-4">{{ $errors->first('nombre') }}</strong>
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
          <strong class="cyan-text text-darken-4">{{ $errors->first('Descripcion') }}</strong>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
            id="Precio"
            type="text" 
            class="validate"
            name="Precio">
          <label for="Precio">Precio</label>
          <strong class="cyan-text text-darken-4">{{ $errors->first('Precio') }}</strong>
        </div>
      </div>
      <div class="row">
          <div class="col s8 input-field">
              <select name="marca" id="marca">
                  <option value="">
                    Elija la marca del producto
                  </option>
                  @foreach($marcas as $marca)
                  <option value="{{ $marca->id }}" >
                    {{ $marca->Nombre }}
                  </option>
                  @endforeach
              </select>
              <label>Materialize Select</label>
              <strong class="cyan-text text-darken-4">{{ $errors->first('marca') }}</strong>
            </div>
          </div>
          <div class="row">
            <div class="col s8 input field">
              <select name="categoria" id="categoria">
                <option value=""></option>
                  @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->Nombre}}
                    </option>
                  @endforeach
              </select>
              <label>Elija categoria</label>
              <strong class="cyan-text text-darken-4">{{ $errors->first('categoria') }}</strong>
          </div>
      </div>
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="imagen" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
    <strong class="cyan-text text-darken-4">{{ $errors->first('imagen') }}</strong>
    </div>  
    </div>
    <button class="btn waves-effect waves-light" type="submit">Guardar</button>
    </form>
  

  @endsection