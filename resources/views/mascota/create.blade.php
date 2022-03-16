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
                <img src="https://www.welovedaily.com/media/pages/resources/35-creative-dog-logos/891237163-1631837774/dribbble.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover;">
            </div>
            <div class="col-sm-6 text-black">
              <br><br>
              <h2><b>Mascota</b></h2>
              <br><br><br>
              <form action="/mascotas" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-5 col-md-6">
                      <label for="" class="form-label"><b>Nombre mascota *</b></label>
                      <input id="nombre_mascota" name="nombre_mascota" type="text" class="form-control" required>    
                    </div>
                    <div class="col-sm-5 col-md-6">
                      <label for="" class="form-label"><b>Raza *</b></label>
                      <select name="raza" id="raza" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach($razas as $raza)
                          <option value="{{$raza['id']}}">{{$raza['raza']}}</option>
                        @endforeach
                      </select>
                      <!-- <input id="raza" name="raza" type="text" class="form-control" tabindex="2"> -->
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-sm-5 col-md-6">
                      <label for="" class="form-label"><b>Fecha nacimiento *</b></label>
                      <input id="fecha" name="fecha" type="date" class="form-control" required>
                    </div>
                    <div class="col-sm-5 col-md-6">
                      <label for="" class="form-label"><b>Nombre humano * </b></label>
                      <input id="nombre_humano" name="nombre_humano" type="text" class="form-control" required>
                    </div>
                  </div>
                <div class="mb-3">
                  <label for="" class="form-label"><b>Descripcion </b>*</label>
                  <textarea name="descripcion" class="form-control" ></textarea>
                </div>
                <a href="/mascotas" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
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