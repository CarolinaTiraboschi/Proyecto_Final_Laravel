@extends('template')

@section('mainContent')
  <body class="galaxy">
  <div class="container" style="margin-top:30px; margin-bottom: 30px;">
      <div class="row justify-content-center">
      <div class= "site-title">
        <h1> SYZYGY </h1>
        <h3>EL ENCUENTRO FORTUITO </h3>
      </div>

<div class= " col-10 description">
      <p>SYZYGY Es un lugar donde escritores amateur pueden compartir sus historias y ensayos y recibir las críticas y felicitaciones de sus
      pares. Un lugar seguro en el espacio en el que desplegar tu creatividad y compartir con el mundo eso que está en tu interior!</p>
    </div>
    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <h2 class= "registrar">INICIAR SESIÓN</h2>
          <div class="row">
            <div class="col-10 formulario">

              <br>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}">
                    @error ('username')
                      <i style="color: red;"> {{ $errors->first('username') }}</i>
                    @enderror
                    <div class="invalid">
                      <!-- Mensaje de error -->
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-10 formulario">
              <div class="col-md-12">
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña">
                <a href="">Olvidé mi contraseña</a>

                <button type="submit" class="btn btn-primary">Ingresar</button>

              </div>
            </div>
          </div>






            </div>
          </div>

        </div>



      <div class="col-12 foot">
          <p>¿Todavía no estás registrado?</p>
          <a href="register">REGISTRARME AHORA </a>

</body>
<style>
@media (min-width: 600px) {
  .site-title{
    width: 38vw;
   }

  .site-title h1 {
   font-size: 10vw;
  }

  .site-title h3 {
    font-size: 1.7vw;
    margin-bottom: 11vh;

}

.registrar{
  font-size: 3vw;

}

.description p{
  font-size: 1.7vw;
}

@media (min-width: 1024px) {
  .site-title{
    width: 30vw;
   }

  .site-title h1 {
   font-size: 8vw;
  }

  .site-title h3 {
    font-size: 1vw;
    margin-bottom: 10vh;

}

.registrar{
  font-size: 2vw;
  margin-bottom: 3vh;

}

.description p{
  font-size: 1.5vw;
}
</style>

@endsection
