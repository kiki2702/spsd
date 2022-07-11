<main role="main" class="container">
      <h1 class="mt-4">Surat Keterangan Usaha</h1>
      <p class="lead">Isi Data Berikut ini</p>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/ket_usaha_pdf" method="post">
  
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
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama" placeholder="Agama" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Pekerjaan/Usaha</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="pekerjaan" placeholder="Pekerjaan/Usaha" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama Usaha</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="usaha" placeholder="Nama Usaha" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tujuan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="tujuan" placeholder="Tujuan" required>
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