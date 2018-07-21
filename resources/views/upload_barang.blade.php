@extends('layouts.apps')

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-4">
  <center>
	<div class="card">
	  <div class="form-group">
		<h3>Upload Foto</h3>
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
  </center>
  </div>
  
  <div class="col-sm-8">
  
	<div class="card col-12">
	<h5> Informasi Produk </h5>
	  <div class="form-group">
		<input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk">
	  </div>
	  <div class="form-group">
		<label for="kategori">Kategori</label>
		<select class="form-control" name="kategori" id="kategori">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
	  </div>
	</div>
	<br>
	<div class="card col-12">
	<h5> Harga </h5>
	  <div class="form-inline">
		<div class="col-sm-1">
		  <input type="text" class="form-control form-control-lg" placeholder="Rp." readonly>
		</div>
		<div class="col-sm-4">
		  <input type="number" class="form-control form-control-lg" name="harga" id="harga" placeholder="Masukkan Harga">
		</div>
	  </div>
	  <br>
	</div>
	<br>
	<div class="card col-12">
	<h5> Pengelolaan Produk </h5>
	  <div class="form-group">
		<label for="status_produk">Status Produk</label>
		<select class="form-control" name="status_produk" id="status_produk">
		  <option>Selalu Tersedia</option>
		  <option>Stock Kosong</option>
		  <option>Stock Terbatas</option>
		</select>
	  </div>
	  <div class="form-inline">
		<label for="stok" class="col-sm-2 col-form-label">Jumlah Stok</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" name="stok" id="stok" value="1">
		</div>
	  </div>
	<br>
	</div>
	<br>
	<div class="card col-12">
	<h5> Deskripsi Produk </h5>
	  <div class="form-group">
		<label for="deskripsi">Deskripsi</label>
		<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
	  </div>
	</div>
	<br>
	<div class="card col-12">
	<h5> Pengiriman </h5>
	  <div class="form-inline">
		<div class="col-sm-2">
		  <label for="berat">&nbsp;</label>
		  <select class="form-control" name="berat" id="berat">
			<option>Gram(g)</option>
			<option>Kilogram (Kg)</option>
		  </select>
		</div>
		<div class="col-sm-4">
		  <input type="number" class="form-control form-control-lg" name="berat" id="berat" placeholder="Masukkan Berat">
		</div>
	  </div>
	  <br>
	  <label for="asuransi"> Asuransi </label>
	    <div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="asuransi" id="asuransi1" value="opsional">
		  <label class="form-check-label" for="inlineRadio1">Opsional</label>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input class="form-check-input" type="radio" name="asuransi" id="asuransi2" value="wajib">
		  <label class="form-check-label" for="inlineRadio2">Wajib</label>
		</div>
		<br>
	</div>
	<br>
	<div class="col-12">
	 <div class="float-right">
	  <button class="btn btn-secondary" type="button" name="simpan" id="simpan"> Batal </button>
	  <button class="btn btn-primary" type="button" name="simpan" id="simpan"> Simpan </button>
	 </div>
	</div>
	<br>
	<br>
	<br>
  </div>
</div>
</div>
@endsection