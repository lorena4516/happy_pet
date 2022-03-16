@extends('layouts.plantillabase')
@section('contenido')

@if(isset(Auth::user()->email))
<style>
    .minh-100 {
    height: 100vh;
    }
    .content{
        border:solid 1px black;
        border-radius:5px;
    }
    a{
        color:black;
        text-decoration:none;
    }
</style>
<nav class="navbar navbar-light bg-light" style="padding-left:10%;padding-right:10%;">
    <div class="container-fluid">
        <a class="navbar-brand"><b>Happy Pet</b></a>
        <form class="d-flex">
            <span>Bienvenido(a) {{ Auth::user()->email }}</span>&nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="{{ url('/main/logout') }}">Cerrar sesion</a>     
        </form>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center align-items-center minh-100 justify-content-between">
        <div class="content col-sm-4 col-lg-4 " >
            <img class="img-fluid rounded mx-auto d-block" src="https://www.mcicon.com/wp-content/uploads/2021/06/Dog-60.jpg" alt="logo" width="90%" height="90%"><br>
            <center><a href="{{ url('/mascotas/') }}"><h1>Mascota</h1></a></center>
        </div>
        <div class="content col-sm-4 col-lg-4">
        <img class="img-fluid rounded mx-auto d-block" src="https://i.pinimg.com/originals/25/01/95/2501956b98715b4187dc839ce917f463.jpg" alt="logo" width="90%" height="90%"><br>
            <center><span><h1>Citas</h1></span></center>
        </div>
        <div class="content col-sm-4 col-lg-4">
        <img class="img-fluid rounded mx-auto d-block" src="https://media.istockphoto.com/vectors/shopping-cart-icon-vector-id1128229893?k=20&m=1128229893&s=170667a&w=0&h=GcHTdZh_G8KczTeOuV-wZawlI8B1E_TA0THRHI1s2vI=" alt="logo" width="90%" height="90%"><br>
            <center><span><h1>Tienda</h1></span></center>
        </div>
    </div>
</div>

@else
<script>window.location = "/main";</script>
@endif
@endsection
  
