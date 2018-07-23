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
	<div class="col-12">
		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="informasi-profil-tab" data-toggle="tab" href="#informasi-profil" role="tab" aria-controls="informasi-profil" aria-selected="true">Informasi Toko</a>
			<a class="nav-item nav-link" id="lokasi-tab" data-toggle="tab" href="#lokasi" role="tab" aria-controls="lokasi" aria-selected="false">Lokasi</a>
			<a class="nav-item nav-link" id="sosmed-tab" data-toggle="tab" href="#sosmed" role="tab" aria-controls="sosmed" aria-selected="false">Akun Sosial Media</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="informasi-profil" role="tabpanel" aria-labelledby="informasi-profil-tab">
			<div class="card col-12">
			  <div class="form-group">
				<input type="text" class="form-control form-control-lg" name="nama_toko" id="nama_toko" placeholder="Nama Toko">
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" name="slogan" id="slogan" placeholder="Slogan">
			  </div>
			  <div class="form-group">
				<label for="deskripsi_toko">Deskripsi</label>
				<textarea class="form-control" name="deskripsi_toko" id="deskripsi_toko" rows="2"></textarea>
			  </div>
			</div>
			<br>
			<div class="card col-12">
			<h5> Tentang Toko </h5>
			  <div class="form-group col-6">
				<input type="number" class="form-control" name="tahun_didirikan" id="tahun_didirikan" placeholder="Tahun Berdirinya Toko Anda">
			  </div>
			  <div class="form-group">
				<label for="visi">Visi</label>
				<textarea class="form-control" name="visi" id="visi" rows="3"></textarea>
			  </div>
			  <div class="form-group">
				<label for="misi">Misi</label>
				<textarea class="form-control" name="misi" id="misi" rows="3"></textarea>
			  </div>
			  <div class="form-group">
				<label for="about">About US</label>
				<textarea class="form-control" name="about" id="about" rows="5"></textarea>
			  </div>
			  <br>
			</div>
		  </div>
		  <div class="tab-pane fade" id="lokasi" role="tabpanel" aria-labelledby="lokasi-tab">
		   <div class="card col-12">
			<div class="form-group">
			  <label for="alamat">Alamat</label>
			  <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
			</div>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<select class="form-control" id="provinsi">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="kota_kab">Kota/Kabupaten</label>
				<select class="form-control" id="kota_kab">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan</label>
				<select class="form-control" id="kecamatan">
				  <option>1</option>
				  <option>2</option>
				  <option>3</option>
				  <option>4</option>
				  <option>5</option>
				</select>
			</div>
			<div class="form-group">
			  <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode POS">
			</div>
		   </div>
		   <br>
		   <div class="card col-12">
			<h5> Link Lokasi Google Maps </h5>
			<div class="form-group">
			  <input type="text" class="form-control" name="link_lokasi" id="link_lokasi" placeholder="Masukkan Link">
			</div>
		   </div>
		  </div>
		  <div class="tab-pane fade" id="sosmed" role="tabpanel" aria-labelledby="sosmed-tab">
			<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
				  <div class="input-group-text"><i class="fa fa-facebook fa-fw"></i></div>
				</div>
				<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Link Akun Facebook">
			  </div>
			<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
			  <div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
				  <div class="input-group-text"><i class="fa fa-instagram fa-fw"></i></div>
				</div>
				<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Link Akun Instagram">
			  </div>
		  </div>
		</div>
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