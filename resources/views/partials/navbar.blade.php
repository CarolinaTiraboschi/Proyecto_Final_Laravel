<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image:url('/images/Background.jpg'); background-position:center; background-size: cover;">
	<div class="container");>
		<a class="navbar-brand" href="#">Syzygy</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myOwnNav" aria-controls="myOwnNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="myOwnNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="/faq">F.A.Q.</a></li>

				@auth
					<li class="nav-item"><a class="nav-link" href="/allPost/{{Auth::id()}}">Mis Escritos</a></li>
					<li class="nav-item"><a class="nav-link" href="/profile/{{Auth::id()}};">Perfil</a></li>


				@endauth
				<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Escritos
					</a>
					<div class="dropdown-menu" aria-labelledby="dropNavBar">
						<a class="dropdown-item" href="/allPosts/11">Todos tus escritos</a>
						@auth
							<a class="dropdown-item" href="/movies/create">Create a movie</a>
						@endauth
						<a class="dropdown-item" href="/movies/actors">Actors by movie</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="/genres">Genres & Movies</a></li> -->
			</ul>

			<ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
				@guest
					<li class="nav-item"><a class="nav-link" href="/register">Registrarse</a></li>
					<li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
				@else
					<img src= '/storage/avatars/{{Auth::user()->avatar}}' width="40" style="border-radius: 50%; background-color: #ffffff; padding: 1px;">
							<li class="nav-item" style="color:rgb(198, 197, 197); margin-left:4px;">	Hola, {{ Auth::user()->username }}</li>
							<form action="/logout" method="post">
							@csrf
							<li class="nav-item"><button type="submit" class="dropdown-item" style="color:rgb(198, 197, 197)">Logout</button></li>
						</form>
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
	</div>
</nav>
