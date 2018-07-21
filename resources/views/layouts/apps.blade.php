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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<!-- Styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<style>
		.carousel-item {
		  height: 65vh;
		  min-height: 300px;
		  background: no-repeat center center scroll;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

		.font-judul {
			font-family: 'Ubuntu', sans-serif;'
		}

		.hovereffect {
		  width: 100%;
		  float: left;
		  overflow: hidden;
		  position: relative;
		  text-align: center;
		  cursor: default;
		  background: black;
		}

		.hovereffect .overlay {
		  width: 100%;
		  height: 100%;
		  position: absolute;
		  overflow: hidden;
		  top: 0;
		  left: 0;
		  padding: 50px 20px;
		}

		.hovereffect img {
		  display: block;
		  position: relative;
		  max-width: none;
		  width: calc(100% + 20px);
		  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		  transition: opacity 0.35s, transform 0.35s;
		  -webkit-transform: translate3d(-10px,0,0);
		  transform: translate3d(-10px,0,0);
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		}

		.hovereffect:hover img {
		  opacity: 0.4;
		  filter: alpha(opacity=40);
		  -webkit-transform: translate3d(0,0,0);
		  transform: translate3d(0,0,0);
		}

		.hovereffect h2 {
		  text-transform: uppercase;
		  color: #fff;
		  text-align: center;
		  position: relative;
		  /*font-size: 17px;*/
		  overflow: hidden;
		  padding: 0.5em 0;
		  background-color: transparent;
		}

		.hovereffect h2:after {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  width: 100%;
		  height: 2px;
		  background: #fff;
		  content: '';
		  -webkit-transition: -webkit-transform 0.35s;
		  transition: transform 0.35s;
		  -webkit-transform: translate3d(-100%,0,0);
		  transform: translate3d(-100%,0,0);
		}

		.hovereffect:hover h2:after {
		  -webkit-transform: translate3d(0,0,0);
		  transform: translate3d(0,0,0);
		}

		.hovereffect a, .hovereffect p {
		  color: #FFF;
		  opacity: 0;
		  filter: alpha(opacity=0);
		  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
		  transition: opacity 0.35s, transform 0.35s;
		  -webkit-transform: translate3d(100%,0,0);
		  transform: translate3d(100%,0,0);
		}

		.hovereffect:hover a, .hovereffect:hover p {
		  opacity: 1;
		  filter: alpha(opacity=100);
		  -webkit-transform: translate3d(0,0,0);
		  transform: translate3d(0,0,0);
		}

		/*Views Beli*/
			img{
	  max-width:100px;
	  height:100px;
	  margin-top:20px;
	}
	input{
		margin-top:20px;
	}

	.btn-file {
    position: relative;
    overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}

	#img-upload{
		width: 100%;
	}
	/*end Views Beli*/
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
	<br>
	<!--END HEADER-->

	<main>
		@yield('content')
	</main>
</body>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<script>
		$('.carousel').carousel()

		/*Views Beli*/
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

		$(document).ready( function() {
			$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [label]);
			});

			$('.btn-file :file').on('fileselect', function(event, label) {

				var input = $(this).parents('.input-group').find(':text'),
					log = label;

				if( input.length ) {
					input.val(log);
				} else {
					if( log ) alert(log);
				}

			});
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#img-upload').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#imgInp").change(function(){
				readURL(this);
			});
		});
		/*end Views Beli*/
	</script>
</html>
