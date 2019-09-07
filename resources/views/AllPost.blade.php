
@extends('template')
@section('pageTitle', 'Todos los post de')


@section('mainContent')
<br>
<div class="container profile_general">
<div class="col-12 profile_username">
  <h3 style="text-align:center;">Todos los escritos de {{ $theUser }}</h3>
</div>

<div class= "row justify-content-center profile_posts_section">
  <div class="card posts_container">
  @foreach ($posts as $post)
    <div class="card-text">
      <div class="card-header" style="text-align:center; font-weight:bold;">{{$post->title}}</div> <br>
      <div class="card-body">
        <p class="card-text">{{$post->paragraph}}</p> <br>
        <a href="#" class="btn btn-primary">Leer más</a>

  <div class="row category_section">
          @foreach ($post->categories as $category)
            @php $categories[]= $category->name;
            @endphp
          @endforeach
          @foreach ($categories as $category_name)
              <div class="col-4 profile_interests_pastillas">
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
@endsection
