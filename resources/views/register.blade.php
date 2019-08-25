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

<form action="/register" method="post" enctype="multipart/form-data">
  @csrf
  <h2 class= "registrar" >REGISTRARME</h2>

  {{-- Errores si los hubiera --}}
@if (count($errors))
  <ul>
    @foreach ($errors->all() as $error)
      <li class="text-danger"> {{ $error }} </li>
    @endforeach
  </ul>
@endif


    <div class="row formulario ">
      <div class="col-12">
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario" value="{{ old('username') }}">
          @error ('title')
            <i style="color: red;"> {{ $errors->first('username') }}</i>
          @enderror
          <div class="invalid">
            <!-- Mensaje de error -->
          </div>
        </div>
      </div>

      <div class="col-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Nombre Completo"value="{{ old('name') }}">
              <div class="invalid">
                <!-- Mensaje de error -->
              </div>
            </div>
      </div>

      <div class="col-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Correo Electrónico">
              <div class="invalid">
                <!-- Mensaje de error -->
              </div>

            </div>
      </div>

      <div class="col-12">
  					<div class="form-group">
  						<select name="country" class="form-control">
  							<option value="">País de nacimiento</option>
  						</select>
  						<div class="invalid">
  							<!-- Mensaje de error -->
  						</div>
  					</div>
  				</div>

      <div class="col-6">
            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="Contraseña">
              <div class="invalid">
                <!-- Mensaje de error -->
              </div>
            </div>
      </div>

      <div class="col-6">
            <div class="form-group">
              <input type="password" name="pass-repeat" class="form-control" placeholder="Repita su contraseña">
              <div class="invalid">
                <!-- Mensaje de error -->
              </div>
            </div>
      </div>

      <div class="col-12">
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="avatar">
    				<label class="custom-file-label">Subir imagen de perfil (Opcional)</label>
					</div>
					@error ('avatar')
						<i style="color: red;"> {{ $errors->first('avatar') }}</i>
					@enderror

				</div>




            <div class="col-10 reg-button">

            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>



          </div>
        </div>
      </div>
    </form>

      <script src="/js/jquery-3.4.1.min.js"></script>
  	  <script src="/js/bootstrap.min.js"></script>
    	<script src="/js/getCountries.js"></script>
      <script src="/js/registerValidate.js"></script>

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
