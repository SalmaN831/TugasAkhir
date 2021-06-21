<?php
session_start();
include 'koneksi.php';
// menyimpan data ke dalam variabel
$nik				=	$_POST['nik'];
$nobpjs				=	$_POST['nobpjs'];
$nama				=	$_POST['nama'];
$alamat				=	$_POST['alamat'];
$provinsi			=	$_POST['provinsi'];
$kecamatan			=	$_POST['kecamatan'];
$tanggal_lahir		=	$_POST['tanggal_lahir'];
$kota				=	$_POST['kota'];
$kelurahan			=	$_POST['kelurahan'];
$tgl_periksa		=	$_POST['tgl_periksa'];
$jenis_kelamin		=	$_POST['jenis_kelamin'];
$tgl 				= 	$_POST['tanggal_lahir'];
$tanggal 			= 	new DateTime($tgl);
$today 				= 	new DateTime('today');
$y					= 	$today->diff($tanggal)->y;
$m 					= 	$today->diff($tanggal)->m;
$d 					= 	$today->diff($tanggal)->d;
if ($y>="60") {
		$query="INSERT INTO tbl_lansia SET id='', nik='$nik', nobpjs='$nobpjs',nama='$nama', alamat='$alamat', provinsi='$provinsi', kecamatan='$kecamatan',tanggal_lahir='$tanggal_lahir', kota='$kota', kelurahan='$kelurahan', tgl_periksa='$tgl_periksa', jenis_kelamin='$jenis_kelamin'";
		$query2="INSERT INTO tbl_data SET id_antrian='', nama='$nama', keterangan='L', tgl_periksa='$tgl_periksa'";
		$keterangan='L';
		
}
else{
		$query="INSERT INTO tbl_pasien SET id='', nik='$nik', nobpjs='$nobpjs', nama='$nama', alamat='$alamat', provinsi='$provinsi', kecamatan='$kecamatan',tanggal_lahir='$tanggal_lahir', kota='$kota', kelurahan='$kelurahan', tgl_periksa='$tgl_periksa', jenis_kelamin='$jenis_kelamin'";
		$query2="INSERT INTO tbl_data SET id_antrian='', nama='$nama', keterangan='BL', tgl_periksa='$tgl_periksa'";
		$keterangan='BL';
}

$data = mysqli_query($koneksi,"select * from tbl_data where tgl_periksa='$tgl_periksa'");
$antrian = mysqli_num_rows($data);
$antrian = $antrian+1;

		$_SESSION['antrian'] = $antrian;
		$_SESSION['tgl_periksa'] = $tgl_periksa;
	    $_SESSION['keterangan'] = $keterangan;
	    $_SESSION['nama'] = $nama;

mysqli_query($koneksi, $query);
mysqli_query($koneksi, $query2);



// mengalihkan ke halaman index.php
header("location:printantrian.php");
?>