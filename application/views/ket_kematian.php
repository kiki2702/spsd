<main role="main" class="container">
      <h1 class="mt-4">Surat Keterangan Kematian</h1>
      <p class="lead">Isi Data Berikut ini</p>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/ket_kematian_pdf" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">NIK</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nik" placeholder="NIK" required>
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
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tanggal Lahir/ Umur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ttl" placeholder="Tanggal Lahir/ Umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Hari</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="hari" placeholder="Hari" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tanggal</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="tanggal" placeholder="Tanggal" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Bertempat di</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="bertempat" placeholder="Bertempat di" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama Pelapor</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_pelapor" placeholder="Nama Lengkap" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">NIK Pelapor</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nik_pelapor" placeholder="NIK" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Umur Pelapor</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="umur_pelapor" placeholder="NIK" required>
    </div>
  </div>
     <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Pekerjaan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="pekerjaan_pelapor" placeholder="Pekerjaan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat Pelapor</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="alamat_pelapor" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Hubungan Pelapor</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="hub_pelapor" placeholder="Hubungan" required>
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