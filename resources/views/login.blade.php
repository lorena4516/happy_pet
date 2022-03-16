@extends('layouts.plantillabase')
@section('contenido')
<style>
    .bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
    }

    @media (min-width: 1025px) {
    .h-custom-2 {
        height: 100%;
    }
}
</style>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 px-0 d-none d-sm-block" style="background-color:grey;">
                <img src="https://worldtiles1.waze.com/tiles/17/85328/56318.png?highres=true" alt="Login image" class="w-100 vh-100" style="object-fit: cover;">
            </div>
            @if(isset(Auth::user()->email))
                <script>window.location="main/successlogin";</script>
            @endif
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4">
                    <center><span class="h1 fw-bold mb-0">Happy Pet</span></center>
                </div>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form style="width: 25rem;" method="post" action="{{ url('/main/checklogin') }}">
                        <center><h3 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Login</h3></center>
                        {{ csrf_field() }}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example18">Correo electrónico</label>
                            <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" />                           
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example28">Contraseña</label>
                            <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
                        </div>
                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg" type="submit" name="login"> Ingresar</button>
                        </div>
                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Olvidé mi contraseña</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection