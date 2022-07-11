<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct(){
        parent::__construct();
   
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index()
	{
        $this->load->view('_komponen/header');
        $this->load->view('home');
        $this->load->view('_komponen/footer');
    }

	public function profil_desa()
	{
        $this->load->view('_komponen/header');
        $this->load->view('profil_desa');
        $this->load->view('_komponen/footer');
    }

    public function struktur()
	{
        $this->load->view('_komponen/header');
        $this->load->view('struktur');
        $this->load->view('_komponen/footer');
    }

    public function persuratan()
	{
        $this->load->view('_komponen/header');
        $this->load->view('persuratan');
        $this->load->view('_komponen/footer');
    }

    public function arsip()
	{
        $this->load->view('_komponen/header');
        $this->load->view('arsip');
        $this->load->view('_komponen/footer');
    }

    public function statistik()
	{
        $this->load->view('_komponen/header');
        $this->load->view('statistik');
        $this->load->view('_komponen/footer');
    }

    public function ket_belum_nikah()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_belum_nikah');
        $this->load->view('_komponen/footer');
    }

    public function ket_bersih_diri()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_bersih_diri');
        $this->load->view('_komponen/footer');
    }

    public function ket_domisili()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_domisili');
        $this->load->view('_komponen/footer');
    }

    public function ket_identitas()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_identitas');
        $this->load->view('_komponen/footer');
    }

    public function ket_kematian()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_kematian');
        $this->load->view('_komponen/footer');
    }

    public function ket_pengganti()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_pengganti');
        $this->load->view('_komponen/footer');
    }

    public function ket_sktm()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_sktm');
        $this->load->view('_komponen/footer');
    }

    public function ket_sktm_umum()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_sktm_umum');
        $this->load->view('_komponen/footer');
    }

    public function ket_umum()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_umum');
        $this->load->view('_komponen/footer');
    }

    public function ket_usaha()
	{
        $this->load->view('_komponen/header');
        $this->load->view('ket_usaha');
        $this->load->view('_komponen/footer');
    }

    public function p_ahli_waris()
	{
        $this->load->view('_komponen/header');
        $this->load->view('p_ahli_waris');
        $this->load->view('_komponen/footer');
    }

    public function u_izin_keramaian()
	{
        $this->load->view('_komponen/header');
        $this->load->view('u_izin_keramaian');
        $this->load->view('_komponen/footer');
    }

     public function u_izin_sound()
	{
        $this->load->view('_komponen/header');
        $this->load->view('u_izin_sound');
        $this->load->view('_komponen/footer');
    }

    public function u_surat_tugas()
	{
        $this->load->view('_komponen/header');
        $this->load->view('u_surat_tugas');
        $this->load->view('_komponen/footer');
    }

    public function p_pengantar_kua()
	{
        $this->load->view('_komponen/header');
        $this->load->view('p_pengantar_kua');
        $this->load->view('_komponen/footer');
    }

    public function p_pengantar_nikah()
	{
        $this->load->view('_komponen/header');
        $this->load->view('p_pengantar_nikah');
        $this->load->view('_komponen/footer');
    }

    public function p_jual_tanah()
	{
        $this->load->view('_komponen/header');
        $this->load->view('p_jual_tanah');
        $this->load->view('_komponen/footer');
    }

    public function p_pernyataan_kk()
	{
        $this->load->view('_komponen/header');
        $this->load->view('p_pernyataan_kk');
        $this->load->view('_komponen/footer');
    }

    // public function ket_belum_nikah_pdf()
	// {
    //     $data['nama'] = $this->input->post('nama');
    //     $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
    //     $data['ttl'] = $this->input->post('ttl');
    //     $this->load->view('ket_belum_nikah_pdf',$data);
    // }

    public function laporan_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['ttl'] = $this->input->post('ttl');
        $data['pengesahan'] = $this->input->post('pengesahan');
        $data['no_ktp'] = $this->input->post('no_ktp');
        $data['status_kawin'] = $this->input->post('status_kawin');
        $data['kebangsaan'] = $this->input->post('kebangsaan');
        $data['agama'] = $this->input->post('agama');
        $data['pendidikan'] = $this->input->post('pendidikan');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('ket_belum_nikah_pdf', $data);
}

public function ket_bersih_diri_pdf(){
        $data['nama_ayah'] = $this->input->post('nama_ayah');
        $data['umur_ayah'] = $this->input->post('umur_ayah');
        $data['agama_ayah'] = $this->input->post('agama_ayah');
        $data['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
        $data['ormas_ayah'] = $this->input->post('ormas_ayah');
        $data['alamat_ayah'] = $this->input->post('alamat_ayah');

        $data['nama_ibu'] = $this->input->post('nama_ibu');
        $data['umur_ibu'] = $this->input->post('umur_ibu');
        $data['agama_ibu'] = $this->input->post('agama_ibu');
        $data['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
        $data['ormas_ibu'] = $this->input->post('ormas_ibu');
        $data['alamat_ibu'] = $this->input->post('alamat_ibu');
        
        $data['nama_anak'] = $this->input->post('nama_anak');
        $data['nik'] = $this->input->post('nik');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['ttl_anak'] = $this->input->post('ttl_anak');
        $data['agama_anak'] = $this->input->post('agama_anak');
        $data['pekerjaan_anak'] = $this->input->post('pekerjaan_anak');
        $data['pendidikan_anak'] = $this->input->post('pendidikan_anak');
        $data['ormas_anak'] = $this->input->post('ormas_anak');
        $data['alamat_anak'] = $this->input->post('alamat_anak');
        
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper('legal', 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_bersih_diri_pdf', $data);
}

public function ket_domisili_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['nik'] = $this->input->post('nik');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['status_kawin'] = $this->input->post('status_kawin');
        $data['agama'] = $this->input->post('agama');
        $data['alamat'] = $this->input->post('alamat');
        $data['ttl'] = $this->input->post('ttl');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_domisili_pdf', $data);
}

public function ket_identitas_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['berlaku'] = $this->input->post('berlaku');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['status_kawin'] = $this->input->post('status_kawin');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['agama'] = $this->input->post('agama');
        $data['alamat'] = $this->input->post('alamat');
        $data['ttl'] = $this->input->post('ttl');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_identitas_pdf', $data);
}

public function ket_kematian_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['nik'] = $this->input->post('nik');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['ttl'] = $this->input->post('ttl');
        $data['alamat'] = $this->input->post('alamat');
 
        $data['hari'] = $this->input->post('hari');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['bertempat'] = $this->input->post('bertempat');

        $data['nama_pelapor'] = $this->input->post('nama_pelapor');
        $data['nik_pelapor'] = $this->input->post('nik_pelapor');
        $data['umur_pelapor'] = $this->input->post('umur_pelapor');
        $data['pekerjaan_pelapor'] = $this->input->post('pekerjaan_pelapor');
        $data['alamat_pelapor'] = $this->input->post('alamat_pelapor');
        $data['hub_pelapor'] = $this->input->post('hub_pelapor');
        
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_kematian_pdf', $data);
}

public function ket_pengganti_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['nik'] = $this->input->post('nik');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['agama'] = $this->input->post('agama');
        $data['alamat'] = $this->input->post('alamat');
        $data['ttl'] = $this->input->post('ttl');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_pengganti_pdf', $data);
}

public function ket_sktm_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');

        $data['nama_anak'] = $this->input->post('nama_anak');
        $data['ttl_anak'] = $this->input->post('ttl_anak');
        $data['jenis_kelamin_anak'] = $this->input->post('jenis_kelamin_anak');
        $data['agama_anak'] = $this->input->post('agama_anak');
        $data['kelas_anak'] = $this->input->post('kelas_anak');
        $data['sekolah_anak'] = $this->input->post('sekolah_anak');
        $data['keterangan'] = $this->input->post('keterangan');

        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_sktm_pdf', $data);
}

public function ket_sktm_umum_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['keterangan'] = $this->input->post('keterangan');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_sktm_umum_pdf', $data);
}

public function ket_umum_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['status_kawin'] = $this->input->post('status_kawin');
        $data['no_ktp'] = $this->input->post('no_ktp');
        $data['tempat_tujuan'] = $this->input->post('tempat_tujuan');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['keterangan'] = $this->input->post('keterangan');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_umum_pdf', $data);
}

public function ket_usaha_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['usaha'] = $this->input->post('usaha');
        $data['tujuan'] = $this->input->post('tujuan');
        $data['pengesahan'] = $this->input->post('pengesahan');
        
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat-keterangan.pdf";
    $this->pdf->load_view('ket_usaha_pdf', $data);
}


public function p_ahli_waris_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['ttl'] = $this->input->post('ttl');
        $data['pengesahan'] = $this->input->post('pengesahan');
        $data['status_kawin'] = $this->input->post('status_kawin');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['hub_pewaris'] = $this->input->post('hub_pewaris');
        $data['nama_pewaris'] = $this->input->post('nama_pewaris');
        $data['tgl_meninggal'] = $this->input->post('tgl_meninggal');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('p_ahli_waris_pdf', $data);
}

public function u_izin_keramaian_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['keperluan'] = $this->input->post('keperluan');
        $data['alamat'] = $this->input->post('alamat');
        $data['hari'] = $this->input->post('hari');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['jam'] = $this->input->post('jam');
        $data['tempat'] = $this->input->post('tempat');
        $data['pengesahan'] = $this->input->post('pengesahan');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('u_izin_keramaian_pdf', $data);
}

public function u_izin_sound_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['umur'] = $this->input->post('umur');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['hari'] = $this->input->post('hari');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['lamanya'] = $this->input->post('lamanya');
        $data['keperluan'] = $this->input->post('keperluan');
        $data['pengesahan'] = $this->input->post('pengesahan');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_izin_sound.pdf";
    $this->pdf->load_view('u_izin_sound_pdf', $data);
}

public function u_surat_tugas_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['jabatan'] = $this->input->post('jabatan');
        $data['alamat'] = $this->input->post('alamat');
        $data['perihal'] = $this->input->post('perihal');
        $data['waktu'] = $this->input->post('waktu');
        $data['jam'] = $this->input->post('jam');
        $data['tempat'] = $this->input->post('tempat');
        $data['ketentuan'] = $this->input->post('ketentuan');
        $data['pengesahan'] = $this->input->post('pengesahan');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_tugas.pdf";
    $this->pdf->load_view('u_surat_tugas_pdf', $data);
}

public function p_pengantar_kua_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['agama'] = $this->input->post('agama');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');

        $data['nama_pasangan'] = $this->input->post('nama_pasangan');
        $data['ttl_pasangan'] = $this->input->post('ttl_pasangan');
        $data['agama_pasangan'] = $this->input->post('agama_pasangan');
        $data['pekerjaan_pasangan'] = $this->input->post('pekerjaan_pasangan');
        $data['alamat_pasangan'] = $this->input->post('alamat_pasangan');
        
        $data['lokasi'] = $this->input->post('lokasi');
        $data['tgl_nikah'] = $this->input->post('tgl_nikah');
        $data['surat_nikah'] = $this->input->post('surat_nikah');
        $data['pengesahan'] = $this->input->post('pengesahan');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('p_pengantar_kua_pdf', $data);
}

public function p_pengantar_nikah_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['nik'] = $this->input->post('nik');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['kebangsaan'] = $this->input->post('kebangsaan');
        $data['agama'] = $this->input->post('agama');
        $data['status_nikah'] = $this->input->post('status_nikah');
        $data['pekerjaan'] = $this->input->post('pekerjaan');
        $data['alamat'] = $this->input->post('alamat');
        $data['tujuan'] = $this->input->post('tujuan');
        $data['keperluan'] = $this->input->post('keperluan');
        $data['berlaku'] = $this->input->post('berlaku');
        $data['ket_lain'] = $this->input->post('ket_lain');
        $data['pengesahan'] = $this->input->post('pengesahan');
    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('p_pengantar_nikah_pdf', $data);
}

public function p_jual_tanah_pdf(){
        $data['nama_pertama'] = $this->input->post('nama_pertama');
        $data['umur_pertama'] = $this->input->post('umur_pertama');
        $data['alamat_pertama'] = $this->input->post('alamat_pertama');

        $data['nama_kedua'] = $this->input->post('nama_kedua');
        $data['umur_kedua'] = $this->input->post('umur_kedua');
        $data['alamat_kedua'] = $this->input->post('alamat_kedua');
        
        $data['lokasi'] = $this->input->post('lokasi');
        $data['luas_tanah'] = $this->input->post('luas_tanah');
        $data['harga'] = $this->input->post('harga');
        $data['sebelah_utara'] = $this->input->post('sebelah_utara');
        $data['sebelah_timur'] = $this->input->post('sebelah_timur');
        $data['sebelah_selatan'] = $this->input->post('sebelah_selatan');
        $data['sebelah_barat'] = $this->input->post('sebelah_barat');
        $data['pengesahan'] = $this->input->post('pengesahan');

    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('p_jual_tanah_pdf', $data);
}

public function p_pernyataan_kk_pdf(){
        $data['nama'] = $this->input->post('nama');
        $data['ttl'] = $this->input->post('ttl');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['kebangsaan'] = $this->input->post('kebangsaan');
        $data['agama'] = $this->input->post('agama');

        $data['nama_kedua'] = $this->input->post('nama_kedua');
        $data['ttl_kedua'] = $this->input->post('ttl_kedua');
        $data['jenis_kelamin_kedua'] = $this->input->post('jenis_kelamin_kedua');
        $data['kebangsaan_kedua'] = $this->input->post('kebangsaan_kedua');
        $data['agama_kedua'] = $this->input->post('agama_kedua');

        $data['pengesahan'] = $this->input->post('pengesahan');

    $this->load->library('pdf');

    $this->pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
    $this->pdf->filename = "surat_pernyataan.pdf";
    $this->pdf->load_view('p_pengantar_kk_pdf', $data);
}
    
}
