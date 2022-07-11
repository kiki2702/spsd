<main role="main" class="container">
      <h1 class="mt-4">Surat Pernyataan Kartu Keluarga</h1>
      <p class="lead">Isi Data Berikut ini</p>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/p_pernyataan_kk_pdf" method="post">
      <p><b>DATA SALAH</b></p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tempat, Tanggal Lahir</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ttl" placeholder="Tempat, Tanggal Lahir" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label col-form-label-sm">Jenis Kelamin</label>
    <div class="col-sm-9">
    <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin" required>
    <option>Pilih Jenis Kelamin...</option>  
    <option>Laki-laki</option>
    <option>Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Kewarganegaraan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="kebangsaan" placeholder="Kewarganegaraan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama" placeholder="Agama" required>
    </div>
  </div>

  <p><b>DATA BENAR</b></p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_kedua" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tempat, Tanggal Lahir</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ttl_kedua" placeholder="Tempat, Tanggal Lahir" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label col-form-label-sm">Jenis Kelamin</label>
    <div class="col-sm-9">
    <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin_kedua" required>
    <option>Pilih Jenis Kelamin...</option>  
    <option>Laki-laki</option>
    <option>Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Kewarganegaraan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="kebangsaan_kedua" placeholder="Kewarganegaraan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama_kedua" placeholder="Agama" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label col-form-label-sm">Jenis Pengesahan</label>
    <div class="col-sm-9">
    <select class="form-control form-control-sm" id="pengesahan" name="pengesahan" required>
    <option>Pilih Pengesahan</option>  
    <option>Kepala Desa</option>
    <option>Atas Nama Kepala Desa</option>
    </select>
    </div>
  </div>
  
   <button type="submit" class="btn btn-primary text-center mb-4">Simpan</button>
</form>
    </div>
  </div>




      
    </main>