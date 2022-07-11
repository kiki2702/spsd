<main role="main" class="container">
      <h1 class="mt-4">Surat Keterangan Pengantar Nikah</h1>
      <p class="lead">Isi Data Berikut ini</p>


  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/p_pengantar_nikah_pdf" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nik" placeholder="Nomor NIK" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Tempat, Tgl Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="ttl" name="ttl" placeholder="Contoh : Pamekasan, 2 Juni 1990" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
    <div class="col-sm-10">
    <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin" required>
    <option>Pilih Jenis Kelamin</option>  
    <option>Laki-laki</option>
    <option>Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Kebangsaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="kebangsaan" placeholder="Islam/Protestan/Katolik/Hindu/Budha" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="agama" placeholder="Islam/Protestan/Katolik/Hindu/Budha" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
    <div class="col-sm-10">
    <select class="form-control form-control-sm" id="jenis_kelamin" name="status_kawin" required>
    <option>Pilih status perkawinan...</option>  
    <option>Menikah</option>
    <option>Belum Menikah</option>
    <option>Cerai Hidup</option>
    <option>Cerai Mati</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Tempat Tujuan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="tujuan" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Keperluan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="keperluan" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Berlaku</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="berlaku" placeholder="Alamat" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Keterangan Lain</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="ket_lain" placeholder="Alamat" required>
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