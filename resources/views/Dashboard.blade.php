@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href={{URL::to("/css/styles.css")}}>

<div class="box-dashboard">
  <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
          <header>
            <h3>¿Qué querés decir?</h3>
          </header>
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <textarea name="nuevo post" class="form-control" id="new-post" rows="5" cols="80" placeholder="Tu publicación"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="button"> Crear Publicación</button>
              </form>
        </div>
  </section>
  </div>

  <section class="row posts">
    <div class="col-md-6 col-md-offset-3">
      <header>
        <h3> Lo que otros están escribiendo...</h3>
        <article class="post">
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="info">
            Publicado por Usuario. 12 de mayo del 2019.
          </div>
              <div class="interaction">
                <a href="#"> Me Gusta</a> |
                <a href="#"> Puede Mejorar</a> |
                <a href="#"> Editar </a> |
                <a href="#"> Borrar</a>
              </div>

        </article>
        <article class="post">
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="info">
            Publicado por Usuario. 12 de mayo del 2019.
          </div>
              <div class="interaction">
                <a href="#"> Me Gusta</a> |
                <a href="#"> Puede Mejorar</a> |
                <a href="#"> Editar </a> |
                <a href="#"> Borrar</a>
              </div>
        </article>
      </header>
    </div>
  </section>

@endsection
