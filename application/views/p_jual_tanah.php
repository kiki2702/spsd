<main role="main" class="container">
      <h1 class="mt-4">Surat Pernyataan Jual Tanah</h1>
      <p class="lead">Isi Data Berikut ini</p>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/p_jual_tanah_pdf" method="post">
      <p>DATA PIHAK PERTAMA</p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_pertama" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Umur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="umur_pertama" placeholder="Umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat_pertama" placeholder="Alamat" required>
    </div>
  </div>
  <p>DATA PIHAK KEDUA</p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_kedua" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Umur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="umur_kedua" placeholder="Umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat_kedua" placeholder="Alamat" required>
    </div>
  </div>
  <p>DATA TANAH</p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Letak Tanah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="lokasi" placeholder="Letak Tanah" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Luas Tanah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="luas_tanah" placeholder="Luas Tanah" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Harga Tanah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="harga" placeholder="Harga Tanah" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Batas Utara</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="sebelah_utara" placeholder="Sebelah Utara" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Batas Timur</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="sebelah_timur" placeholder="Sebelah Timur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Batas Selatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="sebelah_selatan" placeholder="Sebelah Selatan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Batas Barat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="sebelah_barat" placeholder="Sebelah Barat" required>
    </div>
  </div>

  
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-sm">Jenis Pengesahan</label>
    <div class="col-sm-10">
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