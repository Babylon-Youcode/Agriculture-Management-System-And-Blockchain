<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>index</title>
</head>

<style>
  body{
    color: #FFFFFF
  }
  .card{
   background-color: #ABBF02 

  }
  .navbar-brand{
   color: #000000
  }
 
 .form-control{
 border: 2px solid rgb(255, 255, 255);
    padding: 10px;
    border-radius: 25px;
}
 
 
</style>
<body>
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">logo</div>
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
<div class="container   col-3 " >
   <div class="card" style="width: 25rem;">
 <div class="card-body">
<form action="prodect"  method="POST" enctype="multipart/form-data"
>
         <div class="form-group">
              <label for="usr">nom de products</label>
                <input type="text" class="form-control" id="usr">
        </div>

          <div class="form-group">
                <label for="comment">product description</label>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>

           <div class="form-group">
         <label for="pwd">adresse de products</label>
           <input type="text" class="form-control" id="usr">
          </div>

             <div class="form-group">
         <label for="pwd">price</label>
           <input type="text" class="form-control" id="usr">
          </div>
<div class="form-group">
      <label for="sel1">categories</label>
      <select class="form-control" id="sel1">
        <option>vendre les animaux</option>
        <option>vendre les produits alimenté</option>
        <option>louer et vendre les machine de agriculture</option>
        <option> vendre les engrais</option>
           <option>  vendre  des graines</option>
      </select>
      <br>
</div>
               <div class="form-group">
         <label for="pwd">add image</label>
           <input type="file" class="form-control" id="pwd">
          </div>

       <button type="submit" class="btn btn-primary col-3 ">Primary</button>
</form>

</div>
 </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>          

</body>
</html>