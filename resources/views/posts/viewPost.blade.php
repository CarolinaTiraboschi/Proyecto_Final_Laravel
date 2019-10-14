@php
  use App\User;
@endphp

@extends('template')
@php
  $titulo= $post ->title;
@endphp
@section('pageTitle', $titulo)


@section('mainContent')
  <br>
  <div class="container profile_general">
  <div class="col-12 profile_username">
    <h3 style=text-align:center>{{ $post->title }}</h3>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-12 post-section">
  <h5 style=font-style:italic> Una historia de {{$theUser->username}}</h5>

<div class="card-body posts_container"  style="display:block">
  <p class="card-text paragraph-body">{{ $post->paragraph }}</p>
  <br>

  <a href="/allPost/{{$theUser->id}}">Ver todos los escritos de {{$theUser->username}}</a>
<hr />
  <h5>Deja un comentario</h5>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="paragraph" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Enviar" />
                        </div>
                    </form>
  <hr />

    <h5>Comentarios</h5>


    @foreach ($comments as $comment)
      @php
      $user=User::find($comment->user_id);
      @endphp
      <div class="card posts_container">
      <div class="card-text">
        <div class="card-header" style="font-weight:bold;">  <a href="/profile/{{$user->id}}">
          <img src= '/storage/avatars/{{$user->avatar}}' width="40" style="border-radius: 50%; background-color: #ffffff; padding: 1px;">
          {{$user->username}}
        </a></div>
        <div class="card-body">
          <p class="card-text">{{$comment->paragraph}}</p>

          @if ($user->id == Auth::id())
          <p style="color: rgb(11, 187, 150);">Editar comentario</p>
          @endif
        </div>
      </div>
      </div>
    @endforeach



</div>
</div>
@endsection
