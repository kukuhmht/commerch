@extends('layouts.apps')

@section('content')
<br>
<div class="container">
<div class="row">
	<div class="col-sm-5">
	  <img class="img-fluid rounded" src="https://www.mensrepublic.id/assets/images/uploads/card/3-1530680761-A72WnQCwpMIz.jpg" alt="">
	</div>
	<div class="col-sm-6">
	  <h4 class="font-judul"> Sapatu Boots </h4>
	  <hr>
		<h1> Rp.253.000 </h1>
	  <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target=".beli">Beli Ahh..	</button>
	  <button type="button" class="btn btn-success btn-lg btn-block"> Chat via WhatsApp </button>
	  <hr>
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</div>
</div>

<!--MODAL QUICKVIEW-->
<div class="modal fade beli" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title font-judul">Silahkan Isi Data Diri Anda</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<div class="modal-body">
			<div class="row">
			  <div class="col-sm">
				<form>
				  <div class="form-group">
					<input type="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
				  </div>
				  <div class="form-group">
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Aktif">
					<small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda kepada orang lain.</small>
				  </div>
				  <div class="form-group">
					<input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telepon">
				  </div>
				  <div class="form-group">
					<label for="alamat">Alamat Lengkap Anda</label>
					<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
				  </div>
				</form>
			  </div>
			  <div class="col-sm-12">
			  <hr>
				<center>
				  <a href="{!! url('#') !!}"> <button type="button" class="btn btn-secondary btn-lg"> Bayar Nanti </button>
				  <a href="{!! url('/beli') !!}"> <button type="button" class="btn btn-success btn-lg"> Bayar Sekarang </button>
				</center>
			  </div>
			</div>
		</div>
    </div>
  </div>
</div>
<!--END MODAL QUICKVIEW-->
@endsection