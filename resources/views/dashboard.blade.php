<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'commerch') }}</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	
	<!--Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!-- Styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<style>
	.row{
	  margin-top: 40px;
	}

	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 3px 10px 0 rgba(0, 0, 0, 0.1);
	}

	.header {
	  padding: 10px 0;
	  background: #f5f5f5;
	  border-top: 3px solid #3AAA64;
	}
	.button-email{
	  margin:10px 0
	}
	h5, .fa-circle{
	  color:#3AAA64
	}

	.list-group {
		list-style: disc inside;

	}

	.list-group-item {
		display: list-item;
	}

	 .find-more{
	   text-align: right;
	 }


	.label-theme{
	  background: #3AAA64;
	  font-size: 14px;
	  padding: .3em .7em .3em;
	  color: #fff;
	  border-radius: .25em;
	}

	.label a{
	  color: inherit;
	}
	</style>

</head>
<body>
	<!--HEADER-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	    <a class="navbar-brand" href="{!! url('/') !!}">commerch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
	    	    <li class="nav-item active">
		    	    <a class="nav-link" href="{!! url('/') !!}">Home <span class="sr-only">(current)</span></a>
                </li>
		        <li class="nav-item">
			        <a class="nav-link" href="{!! url('/upload_barang') !!}"> <i class="fa fa-upload"></i> </a>
		        </li>
				<li class="nav-item">
			        <a class="nav-link" href="{!! url('/dashboard') !!}"> <i class="fa fa-user"></i> </a>
		        </li>
                <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			            Masuk
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @guest
                        <a class="dropdown-item" href="{!! url('/login') !!}">Login</a>
                        <a class="dropdown-item" href="{!! url('/register') !!}">Register</a>
                    @endguest
                    @auth
			            <a class="dropdown-item" href="{!! url('/logout') !!}">Logout</a>
                    @endauth
		        </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		        <input class="form-control mr-sm-2 mt-0" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
	    </div>
	</nav>
	<!--END HEADER-->
  <header class="header">
    <div class="container">
      <div class="teacher-name">
        <div class="row">
        <div class="col-sm-9">
          <h2><strong>commerch</strong></h2>
        </div>
        <div class="col-sm-3">
          <div class="button float-right">
            <a href="{!! url('/edit_profil') !!}" class="btn btn-outline-success btn-sm">Edit Profile <i class="fa fa-pencil"></i></a>
          </div>
        </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3"> 
          <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsGn7kv2BEPNUxzWCCsRrrS8CVuqUWgRJGxWXkB3XNql0ltGPi7Q">
        </div>

        <div class="col-sm-6"> 
          <h5> <small><i>"Customers Are Number 1"</i></small> </h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <small><i class="fa fa-map-marker" aria-hidden="true"></i> Bandung Kota</small>&nbsp;
          <small><i class="fa fa-calendar" aria-hidden="true"></i> Juli 2018</small>
        </div>

        <div class="col-sm-3 text-center social">
          <span>bagikan:</span>
          <div class="social-icons">
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x" ></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
            <a href="#">
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
            </span></a>
          </div>
		  <br>
		  <center>
			<div class="col-8">
			  <div class="card">
				<h5> 5 </h5>
				<small> Produk Terjual </small>
			  </div>
			  <div class="card">
				<h5> 4.0 </h5>
				<small>
				  <i style="color: yellow;" class="fa fa-star fa-fw"></i>
				  <i style="color: yellow;" class="fa fa-star fa-fw"></i>
				  <i style="color: yellow;" class="fa fa-star fa-fw"></i>
				  <i style="color: yellow;" class="fa fa-star fa-fw"></i>
				  <i class="fa fa-star fa-fw"></i>
				</small>
			  </div>
			</div>
		  </center>
        </div>
      </div>
    </div>
  </header>
  <div class="container">

  <div class="row">
	<div class="col-sm-12">
	  <div class="card card-block text-xs-left">
		<h5><i class="fa fa-info-circle fa-fw"></i>About US</h5>
		<div class="col-12">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-sm-12">
	  <div class="card card-block text-xs-left">
		<h5><i class="fa fa-rocket fa-fw"></i>Visi</h5>
		<div class="col-12">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
        <h5><i class="fa fa-rocket fa-fw"></i>Misi</h5>
        <div class="col-12">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		</div>
        </div>
    </div>
  </div>
</div>