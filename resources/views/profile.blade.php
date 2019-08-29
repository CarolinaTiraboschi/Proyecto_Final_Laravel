@extends('template')

@section('pageTitle', 'Perfil de {{$user}}')

@section('mainContent')

<?php $section='Profile'; ?>

<div class="container profile_general">

	<div class="row justify-content-center profile_avatar_section">
		<div class="col-12 profile_avatar">
      <div class="image_container_profile">
         <img src="img/profile_pic.jpg" alt="Foto perfil">
      </div>
    </div>
    <div class="col-12 profile_username">
      <h3>{{ $user->getUsername() }}</h3>
    </div>
    <div class="col-12 profile_username">
      <a href="#">Upload Avatar</a><br>
    </div>
  </div>

  <div class="row profile_description_section">
    <div class="col-12 profile_description">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a href="#">Edit Description</a><br>
    </div>
  </div>

  <div class="row profile_counter_section">
    <div class="col-6 profile_publicacionescounter">
      <h5>PUBLICACIONES</h5>
      <p>25</p>
    </div>
    <div class="col-6 profile_seguidorescounter">
      <h5>SEGUIDORES</h5>
      <p>145</p>
    </div>
  </div>

  <div class="row profile_interests_section">
    <div class="col profile_interests">
      <h5>INTERESES</h5>
    </div>
    <div class="w-100">  </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Política</span></div>
    </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Poesía</span></div>
    </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Novela</span></div>
    </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Autobiografía</span></div>
    </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Historia</span></div>
    </div>
    <div class="col-4 profile_interests_pastillas">
        <div class="interest"><span>Policial</span></div>
    </div>
  </div>

  <div class="row justify-content-center profile_posts_section">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">PUBLICACIONES</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">BORRADORES</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="card">
          <div class="card-header"> Título del Post </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Leer más</a>
            <span class="fas fa-heart">25</span>
          </div>
        </div>
        <div class="card">
          <div class="card-header"> Título del Post </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Leer más</a>
            <span class="fas fa-heart">25</span>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="card">
          <div class="card-header"> Título del Post </div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="btn btn-primary">Leer más</a>
            <span class="fas fa-heart">25</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>


  </body>
@endsection
