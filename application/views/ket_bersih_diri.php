<main role="main" class="container">
      <h1 class="mt-4">Surat Keterangan Bersih Diri</h1>
      <p class="lead">Isi Data Berikut ini</p>

  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo base_url() ?>assets/img/side.png" class="img-fluid">
    </div>
    <div class="col-sm-9">
      <form action="<?php echo base_url(); ?>page/ket_bersih_diri_pdf" method="post">
      <p><b>DATA AYAH</b></p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_ayah" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Umur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="umur_ayah" placeholder="Umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama_ayah" placeholder="Agama" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Pekerjaan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="pekerjaan_ayah" placeholder="Pekerjaan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Ormas/Orpol</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ormas_ayah" placeholder="Ormas/Orpol" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat_ayah" placeholder="Alamat" required>
    </div>
  </div>

  <p><b>DATA IBU</b></p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_ibu" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Umur</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="umur_ibu" placeholder="Umur" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama_ibu" placeholder="Agama" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Pekerjaan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="pekerjaan_ibu" placeholder="Pekerjaan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Ormas/Orpol</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ormas_ibu" placeholder="Ormas/Orpol" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat_ibu" placeholder="Alamat" required>
    </div>
  </div>

  <p><b>DATA ANAK</b></p>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nama_anak" placeholder="Nama Lengkap" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">NIK</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="nik" placeholder="Umur" required>
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
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Tempat, Tanggal Lahir</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ttl_anak" placeholder="Tempat, Tanggal Lahir" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="agama_anak" placeholder="Agama" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Pekerjaan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="pekerjaan_anak" placeholder="Pekerjaan" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label col-form-label-sm">Pendidikan</label>
    <div class="col-sm-9">
    <select class="form-control form-control-sm" id="pengesahan" name="pendidikan_anak" required>
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
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Ormas/Orpol</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="nama" name="ormas_anak" placeholder="Ormas/Orpol" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control form-control-sm" id="agama" name="alamat_anak" placeholder="Alamat" required>
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