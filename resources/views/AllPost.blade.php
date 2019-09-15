
@extends('template')

@php
  $user= $theUser ->username;
@endphp
@section('pageTitle', 'Todos los post de ' . $user)


@section('mainContent')
<br>
<div class="container profile_general">
<div class="col-12 profile_username">
  <h3 style=text-align:center>Todos los escritos de {{ $theUser->username }}</h3>
</div>

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
<a href="/profile/{{$theUser->id}}">Volver al perfil de {{ $theUser ->username }}</a>
</div>


@endsection
