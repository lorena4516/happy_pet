@extends('layouts.plantillabase')
@section('contenido')
@if(isset(Auth::user()->email))
<nav class="navbar navbar-light bg-light" style="padding-left:10%;padding-right:10%;">
    <div class="container-fluid">
        <a class="navbar-brand"><b>Happy Pet</b></a>
        <a class="navbar-brand">Home</a>
        <a href="{{ url('/mascotas') }}" class="navbar-brand">Mascotas</a>
        <a class="navbar-brand">Citas</a>
        <a class="navbar-brand">Tienda</a>
        <form class="d-flex">
             &nbsp;&nbsp;
            <a href="{{ url('/main/logout') }}">Cerrar sesion</a>     
        </form>
    </div>
</nav>
<div class="container">
  <section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block" style="background-color:grey;">
                <img src="https://storage.googleapis.com/www-paredro-com/uploads/2016/08/6-5.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover;">
            </div>
            <div class="col-sm-6 text-black">
              <br><br>
              <h2><b>Editar informacion</b></h2>
              <br><br><br>
              
              <form action="/mascotas/{{$mascota->id}}" method="POST">
                  @csrf    
                  @method('PUT')
                <div class="mb-3">
                  <label for="" class="form-label">Nombre mascota</label>
                  <input id="nombre_mascota" name="nombre_mascota" type="text" class="form-control" value="{{$mascota->nombre_mascota}}">    
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Raza</label>
                  <select name="raza" id="raza" class="form-control">
                    <option value="">Seleccione...</option>
                    @foreach($razas as $raza)
                      <option value="{{$raza['id']}}">{{$raza['raza']}}</option>
                    @endforeach
                  </select>
                  <!-- <input id="raza" name="raza" type="text" class="form-control" value="{{$mascota->id_raza}}"> -->
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Fecha nacimiento</label>
                  <input id="fecha" name="fecha" type="date" class="form-control" value="{{$mascota->fecha_nacimiento}}">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Nombre humano</label>
                  <input id="nombre_humano" name="nombre_humano" type="text" step="any" class="form-control" value="{{$mascota->nombre_humano}}">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Descripcion</label>
                  <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$mascota->descripcion}}">
                </div>
                <a href="/mascotas" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form> 
            </div>
        </div>
      </div>
    </section>
</div>



@else
<script>window.location = "/main";</script>
@endif
@endsection