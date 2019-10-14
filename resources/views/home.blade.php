@extends('template')
@section('mainContent')
<!--<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

</div>-->

<br>
<div class="col-12 profile_username">
<h2 style="text-align:center;">Dashboard de {{Auth::user()->username}}</h2>
</div>
<div class="container">
  <h5> ¿Qué quieres hacer ahora? </h5>
<div class= "card col-6">
<ul>  <li><a href="/createPost" class="btn btn-success" style= "margin: auto">Publica una nueva historia!</a></li>
  <br>
<li><a href="/allPost/{{Auth::user()->id}}" class="btn btn-primary" style= "margin:auto">Ve tus historias publicadas</a></li>
</ul>
</div>
  <br>
  <br>
<div class="col-12 profile_username">
  <h3 style="text-align:center;">Publicaciones de tus escritores seguidos</h3>
</div>
</div>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="card">
        @foreach ($allPost as $post)


                <div class= "row justify-content-center profile_posts_section col-md-10" style="margin: auto">
                  <div class="card posts_container">

          <div class="card-text">
            <div class="card-header" style="text-align:center; font-weight:bold;">{{$post->title}} by <a href="/profile/{{ $post->user_id}}">{{$newUsers[($post->user_id)]->username}}</a> </div> <br>
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
      </div>
      </div>
        @endforeach

</div>
</div>




@endsection
