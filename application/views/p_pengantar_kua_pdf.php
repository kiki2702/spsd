<html>
    <head>
    <style>
div.container {
    width: 21cm;
    height: 28cm;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
table {

    font-family: times, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

th {
    border: 1px solid #dddddd;
    text-align: center;
    border: 1.5px solid;
    padding: 8px;
    background: yellow;

}
td{
    border: 1px solid #dddddd;
    text-align: left;
    border: 1.5px solid;
    padding: 8px;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
h6{
  margin: 0;
}

h3{
	text-transform: uppercase;
}
.tandatangan{
  width: 10cm;
  position: relative;
  text-align: center;
  margin-top: 10px;
  margin-left: 20cm;

}
.paragraf p{
	text-align: justify; 
}
p.paragraf2{
	text-align: justify; 
	margin-top: 10px;
}
p.indent{
	text-indent:10mm; 
}

table.surat{
	border-style:hidden;
	-top: 0px;
	margin-bottom: 0px; 
}

tr.surat{
	border-style: hidden;
	}

td.surat{
	border-style: hidden;
	padding-top: 2px;
	padding-bottom: 2px;

	}

.kopsurat h3{
	font-size: 23px;
	margin: 0;
}
.kopsurat h2{
	font-size: 25px;
	margin: 0;
}
.kopsurat td{
	border: 1px solid;
}
.kopsurat hr.hr1{
	width: 99%;
	border: 1.5px black solid;
	margin-top: 10px;
	margin-bottom: 2px;
}
.kopsurat hr.hr2{
	width: 99%;
	border: 2.5px black solid;
	margin-top: 2px;
}
.logo img{
	position: absolute;
	margin-top: 0px;
	margin-left: 20px;
}

p.isi{
	margin-bottom: 0px; 
}


</style>    
    <title>SURAT KETERANGAN PENGANTAR KUA</title>
    <style type="text/css">
    	tr, th{
    		border: 1px solid black; 
    	}
    	
    </style>
    </head>
    <body>

<body style="width: 215mm; height: 330mm;border: 1px solid">
<div style="left:170px;margin-top:0px;text-align:center;">
<div style="left:0px;margin-top:0px;text-align: center;">
<img src="<?php echo base_url()?>assets/img/header.png" width=92%  ></div>	

	<h3 style="text-decoration: underline; margin-bottom: 0;margin-top: 5mm">SURAT KETERANGAN PENGANTAR KUA</h3>
	<P style=" margin-top: 0">Nomor : .... / ... / ... .... .... .... / .....</P>

	<div class="paragraf" style="margin-top:5mm;margin-left: 10mm;margin-right: 10mm">
	<p class="indent">Yang bertanda tangan di bawah ini Kepala Desa Sentol Kecamatan Pademawu Kabupaten Pamekasan menerangkan dengan sebenarnya :</p>

	<table class="surat" style="margin-left: 20px">
		<tr class="surat">
			<td class="surat" width="150px">Nama </td>
			<td class="surat">: <?php echo $nama ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Tempat, Tanggal lahir</td>
			<td class="surat">: <?php echo $ttl ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Agama</td>
			<td class="surat">: <?php echo $agama ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Pekerjaan</td>
			<td class="surat">: <?php echo $pekerjaan ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Alamat</td>
			<td class="surat">: <?php echo $alamat ?></td>
		</tr>
	</table>
	<p><b><i>Dengan</i></b><p>
	<table class="surat" style="margin-left: 20px">
		<tr class="surat">
			<td class="surat" width="150px">Nama </td>
			<td class="surat">: <?php echo $nama_pasangan ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Tempat, Tanggal lahir</td>
			<td class="surat">: <?php echo $ttl_pasangan ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Agama</td>
			<td class="surat">: <?php echo $agama_pasangan ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Pekerjaan</td>
			<td class="surat">: <?php echo $pekerjaan_pasangan ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Alamat</td>
			<td class="surat">: <?php echo $alamat_pasangan ?></td>
		</tr>
	</table>
		
		<br>
		<p>Bahwa kedua nama tersebut di atas melaksanakan pernikahan :</p>
		<table class="surat" style="margin-left: 20px">
		<tr class="surat">
			<td class="surat" width="150px">Lokasi </td>
			<td class="surat">: <?php echo $lokasi ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Tanggal Pernikahan</td>
			<td class="surat">: <?php echo $tgl_nikah ?></td>
		</tr>
		<tr class="surat">
			<td class="surat">Surat nikah Nomor</td>
			<td class="surat">: <?php echo $surat_nikah ?></td>
		</tr>
	</table>

	<br>
		<p class="indent">Demikian surat keterangan ini kami buat dengan sebenar-benarnya untuk persyaratan mengurus Duplikat Surat Nikah.</p>
		<br>
		<br>
		
		<?php if($pengesahan=="Kepala Desa") {
		echo "<table class='surat' style='margin-left: 30px'>
			<tr>
				<td class='surat' style='color: white;'><br><br><br><br><br><br>_________________</td>
				<td class='surat' style='color: white;'><br><br><br><br><br><br>_________________</td>
				<td class='surat'>Sentol, ".date('d F Y')." <br>Kepala  Desa Sentol <br><br><br><br><br>EKA HENDRA PRASETYO, SH.</td>
			</tr>
		</table>";
		} else {
			echo "<table class='surat' style='margin-left: 30px'>
			<tr>
				<td class='surat' style='color: white;'><br><br><br><br><br><br>_________________</td>
				<td class='surat' style='color: white;'><br><br><br><br><br><br>_________________</td>
				<td class='surat'>Sentol, ".date('d F Y')."<br>A.N. Kepala  Desa Sentol <br> Sekretaris Desa<br><br><br><br>ACH ZAINI HIDAYATULLAH, SM</td>
			</tr>
		</table>";
		 }?>

		</div>
</body>
</html>