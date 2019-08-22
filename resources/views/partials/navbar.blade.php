<?php
  $username = "Marina Zambrano";
 ?>
  <body>
    <header class="App_header">
      <div class="image_container">
        <img src="img/profile_pic.jpg" alt="Foto perfil">
      </div>
      <div class="user_info">
        <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
        				@guest
        					<li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        					<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        				@else
        					<li class="nav-item dropdown">
        						<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        							<img src="/images/user-default.png" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">
        							Hola {{ Auth::user()->name }}
        						</a>
        						<div class="dropdown-menu" aria-labelledby="dropNavBar">
        							<a class="dropdown-item" href="/profile">Mi perfil</a>
        							<form action="/logout" method="post">
        								@csrf
        								<button type="submit" class="dropdown-item">Salir</button>
        							</form>
        						</div>
        					</li>
        				@endguest
        			</ul>
      </div>
      <div class="config_icon">
        <i class="fas fa-cog"></i>
      </div>
    </header>
