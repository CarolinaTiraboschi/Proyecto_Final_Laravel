@extends('layouts.app')

@section('content')



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
<div class="card">
  <img src="{{ URL::to('/images/profile_pic.jpg') }}" class="rounded-circle" alt="John" style="width:100%">
  <h1 class="username">John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div class="d-flex">
      <a href="#"><i class="fa fa-dribbble pr-3"></i></a>
      <a href="#"><i class="fa fa-twitter pr-3"></i></a>
      <a href="#"><i class="fa fa-linkedin pr-3"></i></a>
      <a href="#"><i class="fa fa-facebook pr-3"></i></a>
  </div>
  <p><button>Contact</button></p>
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
           <img src="{{ URL::to('/images/profile_pic.jpg') }}" class="rounded-circle">
              <div><h3 >Johanna</h3></div>
           <div class="pr-3 "> <p> bio de sus cositas</p> </div>
        </div>
        <div class="col-9">
            <div class="pt-5 font-weight-bold">
              <h1 style="font-family:noto-Serif; text-align:center;">
                MIS ESCRITOS
              </h1>
            </div>
            <div class="d-flex">
              <div class="pt-8"><h4>PUBLICACIONES</h4></div>
              <div class="pt-8"><h4>BORRADORES</h4></div>
            </div>
          </div>
          <div class="row">
            <div class="content">
            <div class="col-9">
              <h4> Titulo del post</h4>
            </div>
          </div>
          </div>
  </div>
@endsection
