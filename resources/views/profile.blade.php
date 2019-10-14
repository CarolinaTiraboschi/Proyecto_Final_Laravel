@extends('template')

@section('pageTitle', 'Perfil de {{$user}}')

@section('mainContent')

<?php $section='Profile'; ?>

<div class="container profile_general">

	<div class="row justify-content-center profile_avatar_section">
		<div class="col-12 profile_avatar">
      <div class="image_container_profile">
         <img src="/storage/avatars/{{$theUser->avatar}}" alt="Foto perfil">
      </div>
    </div>
    <div class="col-12 profile_username">
      <h3>{{ $theUser->getUsername() }}</h3>
    </div>



			@if ($isFollowee)
         Sigues a {{$theUser->username}}
			 @else	@if (!$isUser)
					 <a class= "btn btn-primary" href="/addFriend/{{$theUser->id}}">Seguir a este escritor</a>
				 @endif

			@endif




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

  <div class="row profile_counter_section" style="display: flex">
    <div class="col-4 profile_publicacionescounter">
      <h5>PUBLICACIONES</h5>
      <p>{{$postCount}}
			</p>
    </div>
    <div class="col-4 profile_seguidorescounter">
      <h5>SEGUIDORES</h5>
      <p> {{$followerCount}}</p>
    </div>
		<div class="col-4 profile_seguidorescounter">
      <h5>SEGUIDOS</h5>
      <p> {{$followeeCount}}</p>
    </div>
  </div>

<!--  <div class="row profile_interests_section">
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
-->
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
					<div class= "row justify-content-center profile_posts_section">
					  <div class="card posts_container">
					  @foreach ($posts as $post)
					    <div class="card-text">
					      <div class="card-header" style="text-align:center; font-weight:bold;">{{$post->title}}</div> <br>
					      <div class="card-body">
					        <p class="card-text">
					          @php
					            $text= "$post->paragraph";
					             echo(str_limit($text, 500));
					          @endphp</p> <br>
					          <div class="button-container" style="display:flex">
					        <a href="/viewPost/{{$post->id}}" class="btn btn-primary" style= "margin-right:10px">Leer más</a>
					        @if ($post->user_id==Auth::id())
					          <form action="/viewPost/{{$post->id}}/delete" method="post">
					            @csrf
					              {{ method_field('delete')}}
					              <input type="submit" class="btn btn-danger" style= "margin-right:10px" value="Eliminar Post"></input>
					          </form>
										<a href="/edit/{{$post->id}}" class="btn btn-success" style= "margin-right:10px">Editar post</a>

					        @endif
					      </div>

					  <div class="row category_section">
					          @foreach ($post->categories as $category)
					            @php $categories[]= $category->name;
					            @endphp
					          @endforeach
					          @foreach ($categories as $category_name)
					              <div class="col-md-4 profile_interests_pastillas">
					            <div class="interest" style="text-align:center;"><span>{{$category_name}}</span></div>
					          </div>
					            @php
					              $categories=[];
					            @endphp

					          @endforeach
					</div>
					      </div>
					  </div>
					  @endforeach
					  </div>
					</div>

  </div>
</div>


  </body>
</html>
@endsection
