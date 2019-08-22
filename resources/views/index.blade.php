@extends('template')
@section('pageTitle', 'Index')


@section('mainContent')
    <title>Crea tu cuenta</title>
  </head>
  <body class="galaxy">
    <div class="container" style="margin-top:30px; margin-bottom: 30px;">
        <div class="row justify-content-center">
        <div class= "site-title">
          <h1> SYZYGY </h1>
          <h3>EL ENCUENTRO FORTUITO </h3>
        </div>

<div class= " col-10 description">
        <p>BREVE TEXTO DESCRIPTIVO DE LA APLICACIÓN. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
      </div>

        <form method="post" enctype="multipart/form-data">
  					<div class="row">
  						<div class="col-10 formulario">
                <h2 class= "registrar">INICIAR SESIÓN</h2>
  							<div class="form-group">
  								<input type="text" name="user" class="form-control" placeholder="Ingrese su usuario">
                  <a href="">Olvidé mi usuario</a>


                </div>
                <div class="form-group">
  								<input type="password" name="pass" class="form-control" placeholder="Contraseña">
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
            <a href="register.php">REGISTRARME AHORA </a>

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
