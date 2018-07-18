@extends('layouts.apps')

@section('content')
	<!--CAUROSEL-->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
	<br>
	<!--END CAUROSEL-->

<div class="row">
	<div class="col-sm">
	<div class="hovereffect">
		<img class="img-fluid" src="https://www.mensrepublic.id/assets/images/uploads/card/8-1531126542-VP0Y6TGIxdh6.jpg" alt="">
		<div class="overlay">
			<h2 class="font-judul">Sapatu Anyar</h2>
			<p>
				<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target=".quickview"> Quick View </button>
			</p>
		</div>
	</div>
	<a href="{!! url('/detail') !!}"> <button type="button" class="btn btn-secondary btn-lg btn-block">Rp.357.000</button> </a>
	</div>

    <div class="col-sm">
	<div class="hovereffect">
		<img class="img-fluid" src="https://www.mensrepublic.id/assets/images/uploads/card/1-1530680161-gzLEsp15CMRM.jpg" alt="">
		<div class="overlay">
			<h2 class="font-judul">Calana Ngatung</h2>
			<p>
				<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target=".quickview"> Quick View </button>
			</p>
		</div>
	</div>
	<a href="{!! url('/detail') !!}"> <button type="button" class="btn btn-secondary btn-lg btn-block">Rp.437.000</button> </a>
	</div>

	<div class="col-sm">
	<div class="hovereffect">
		<img class="img-fluid" src="https://www.mensrepublic.id/assets/images/uploads/card/3-1530680761-A72WnQCwpMIz.jpg" alt="">
		<div class="overlay">
			<h2 class="font-judul">Sapatu Boots</h2>
			<p>
				<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target=".quickview"> Quick View </button>
			</p>
		</div>
	</div>
	<a href="{!! url('/detail') !!}"> <button type="button" class="btn btn-secondary btn-lg btn-block">Rp.253.000</button> </a>
	</div>
</div>

<!--MODAL QUICKVIEW-->
<div class="modal fade quickview" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title font-judul">Sapatu Boots</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-6">
				  <img class="img-fluid" src="https://www.mensrepublic.id/assets/images/uploads/card/3-1530680761-A72WnQCwpMIz.jpg" alt="">
				</div>
				<div class="col-sm-6">
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
				  <p style="font-size:12px;color: grey;"> Kategori: Fashion Pria > Sepatu </p>
				  <hr>
				  <center> <h4> Rp.253.000 </h4> </center>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
<!--END MODAL QUICKVIEW-->
@endsection