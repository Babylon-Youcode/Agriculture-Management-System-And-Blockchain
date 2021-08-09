<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   
			<style>
				body{
	margin:0;
	padding:0;
	background:#fff;
	font-family: 'Raleway',sans-serif;
	color: #fff;
}
.banner{
	height: 100vh;
	width: 100%;
	background-image: url()
	background-position: top;
	background-size:cover;
	/*background-attachment: fixed;*/
	background-repeat: no-repeat;
}
.banner .navbar{
	margin-top:4%;
}
.banner .navbar-brand{
	color: #fff;
	font-size:1.8em;
	font-weight: 700;
	margin-left: 10%;
}
.banner .nav{
	margin-right:10%; 
}
.banner .nav li a{
	color:#aaa;
	font-size: 1.2em;
}
.banner .info{
	margin-top:15%;
	transform: translateY(-15%);
}
.banner .info h1{
	font-size: 2.5em;
	font-weight: 700;
	color: #fff;
	letter-spacing: 2px;
}
.banner .info p{
	font-size: 2em;
	font-weight: 500;
	color: #aaa;
	letter-spacing: 2px;
}
.banner .info a{
	margin-left:50%;
	transform: translateX(-50%);
	color: #fff;
	background: #e91d43;
	padding:10px 20px; 
	font-size: 2em;
	font-weight: 600;
}
.banner .info a:hover{
	background: #e91e63;
}
			</style>

           
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">agriculture </div>
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="#">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">PORTFOLIO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">ABOUT</a>
						</li>
							<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">Login</a>
						</li>
            	<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">Sin in</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">AGRICULTURE</h1>
				<p class="text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing
				</p>
				<a href="#" class="btn btn-md text-center">go</a>
			</div>

		</div>
	</div>
</body>
</html>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>          
                </div>
            </div>
        </div>
    </body>
</html>
