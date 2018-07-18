@extends('layouts.apps')

@section('content')
<div class="container">
<div class="row">
	<div class="card col-md-6">
	  <h1> Info Pembayaran </h1>
	  <hr>
	  <b> Total Pembayaran: </b>
	  <h2> Rp 254.000 </h2> <p>*Bayar pesanan sesuai dengan jumlah tersebut</p>
	  <div class="col-12">
		<p> Gunakan ATM / iBanking / mBanking / setor tunai untuk transfer ke rekening berikut: </p>
	   <div class="bg-light col-12">
		<h5> BRI </h5>
		<p> No.Rekening: 1112227733994765 </p>
		<p> Cabang: Ciroyom </p>
		<p> Nama Pemilik: PT comerch </p>
	   </div>
	  </div>
	</div>
	<div class="card col-sm-6">
		<h1> Upload Bukti Pembayaran </h1>
		<hr>
	  <center>
	  <div class="col-sm-8">
		<div class="card">
		  <div class="form-group">
			<h3>Upload Bukti Transfer</h3>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn btn-file">
						Upload <input type="file" id="imgInp">
					</button>
				</span>
				<input type="text" class="form-control" readonly>
			</div>
			<img id='img-upload'/>
		  </div>
		</div>
	  </div>
	  </center>

	  <div class="form-group">
		<label for="nama_bank">Transfer dari Bank</label>
		<select class="form-control" id="nama_bank">
		  <option>BRI</option>
		  <option>BNI</option>
		  <option>BJB</option>
		  <option>BCA</option>
		  <option>Mandiri</option>
		</select>
	  </div>
	  <div class="form-group">
		<label for="metode_transfer">Metode Transfer</label>
		<select class="form-control" id="metode_transfer">
		  <option>ATM</option>
		  <option>mBanking</option>
		  <option>Virtual Account</option>
		</select>
	  </div>
	</div>
	<div class="col-12">
	  <br>
	  <a href="{!! url('/') !!}"> <button type="button" class="btn btn-secondary btn-lg btn-block">Selesai Transaksi</button> </a>
	</div>
</div>
</div>
@endsection