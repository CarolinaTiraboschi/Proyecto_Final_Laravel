@extends('template')
@section('pageTitle', 'Register')


@section('mainContent')

<body class= "galaxy">
  <div class="container" style="margin-top:30px; margin-bottom: 30px;">
    <div class="row justify-content-center">
    <div class= "site-title">
      <h1> SYZYGY </h1>
      <h3>EL ENCUENTRO FORTUITO </h3>
    </div>

    <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-10 formulario">
            <h2 class= "registrar" >REGISTRARME</h2>
            <div class="form-group">
              <input type="text" name="user" class="form-control" placeholder="Nombre de Usuario">

            </div>

            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Nombre Completo">

            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Correo Electrónico">

            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="Contraseña">

            </div>
            <div class="form-group">
              <input type="password" name="pass-repeat" class="form-control" placeholder="Repita su contraseña">

            </div>
            <div class="col-10 reg-button">

            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>



          </div>
        </div>
      </div>
    </div>

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
    </style>

</body>
</html>
@endsection
