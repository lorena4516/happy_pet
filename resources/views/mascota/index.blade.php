@extends('layouts.plantillabase')

@section('contenido')
@if(isset(Auth::user()->email))
<nav class="navbar navbar-light bg-light" style="padding-left:10%;padding-right:10%;">
    <div class="container-fluid">
        <a class="navbar-brand"><b>Happy Pet</b></a>
        <a href="{{ url('/main') }}" class="navbar-brand">Home</a>
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
    <div class="row justify-content-center align-items-center minh-100 justify-content-between">
        <div class="content col-lg-12" >
          <br><br><br>
          <a href="mascotas/create" class="btn btn-primary">Ingresar nueva mascota</a>
          <table class="table table-dark table-striped mt-4">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre mascota</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Nombre humano</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>    
            @foreach ($mascotas as $mascota)
              <tr>
                  <td>{{$mascota->id}}</td>
                  <td>{{$mascota->nombre_mascota}}</td>
                  <td>{{$mascota->fecha_nacimiento}}</td>
                  <td>{{$mascota->nombre_humano}}</td>
                  <td>{{$mascota->descripcion}}</td>
                  <td>
                  <form action="{{ route('mascotas.destroy',$mascota->id) }}" method="POST">
                    <a href="/mascotas/{{$mascota->id}}/edit" class="btn btn-info">Editar</a>         
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>          
                  </td>        
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>




@else
<script>window.location = "/main";</script>
@endif
@endsection