<main role="main" class="container">
      <h1 class="mt-4">Surat Keterangan Belum Nikah</h1>
      <p class="lead">Isi Data Berikut ini</p>


  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/laporan_pdf" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
    <div class="col-sm-10">
    <select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin" required>
    <option>Pilih Jenis Kelamin...</option>  
    <option>Laki-laki</option>
    <option>Perempuan</option>
    </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Tempat, Tgl Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="ttl" name="ttl" placeholder="Contoh : Pamekasan, 2 Juni 1990" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Nomor KTP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="no_ktp" name="no_ktp" placeholder="Contoh : 351706199002060003" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Status Perkawinan</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext form-control-sm" id="staticEmail" name="status_kawin" value="Belum Kawin" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Kebangsaan</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext form-control-sm" id="staticEmail" name="kebangsaan" value="WNI" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" id="agama" name="agama" placeholder="Islam/Protestan/Katolik/Hindu/Budha" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label col-form-label-sm">Pendidikan</label>
    <div class="col-sm-10">
    <select class="form-control form-control-sm" id="pengesahan" name="pendidikan" required>
    <option>Pilih Pendidikan</option>  
    <option>SD / Sederajat</option>
    <option>SMP / Sederajat</option>
    <option>SMA / Sederajat</option>
    <option>Diploma (D3)</option>
    <option>Strata 1 (S1)</option>
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
      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat" required>
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