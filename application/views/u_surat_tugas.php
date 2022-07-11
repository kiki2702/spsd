<main role="main" class="container">
      <h1 class="mt-4">Surat Tugas</h1>
      <p class="lead">Isi Data Berikut ini</p>


  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/u_surat_tugas_pdf" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Jabatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="jabatan" placeholder="Jabatan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Perihal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="perihal" placeholder="Perihal" required>
    </div>
  </div>
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Kegiatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="waktu" placeholder="Waktu" required>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Jam</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="jam" placeholder="Jam" required>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Tempat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="tempat" placeholder="Lamanya" required>
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