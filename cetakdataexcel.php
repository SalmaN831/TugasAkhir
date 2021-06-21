<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet=new Spreadsheet();
$sheet=$spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nik');
$sheet->setCellValue('C1', 'NoBPJS');
$sheet->setCellValue('D1', 'Nama');
$sheet->setCellValue('E1', 'Alamat');
$sheet->setCellValue('F1', 'Provinsi');
$sheet->setCellValue('G1', 'Kecamatan');
$sheet->setCellValue('H1', 'Tanggal Lahir');
$sheet->setCellValue('I1', 'Kota');
$sheet->setCellValue('J1', 'Kelurahan');
$sheet->setCellValue('K1', 'Tanggal Periksa');
$sheet->setCellValue('L1', 'Jenis Kelamin');

$query=mysqli_query($koneksi, "SELECT * FROM tbl_pasien");
$i=2;
$no=1;
while ($row=mysqli_fetch_array($query)) {
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nik']);
	$sheet->setCellValue('C'.$i, $row['nobpjs']);
	$sheet->setCellValue('D'.$i, $row['nama']);
	$sheet->setCellValue('E'.$i, $row['alamat']);
	$sheet->setCellValue('F'.$i, $row['provinsi']);
	$sheet->setCellValue('G'.$i, $row['kecamatan']);
	$sheet->setCellValue('H'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('I'.$i, $row['kota']);
	$sheet->setCellValue('J'.$i, $row['kelurahan']);
	$sheet->setCellValue('K'.$i, $row['tgl_periksa']);
	$sheet->setCellValue('L'.$i, $row['jenis_kelamin']);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i=$i-1;
$sheet->getStyle('A1:L'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pasien.xlsx');
?>
<!DOCTYPE html>
<html>
<head>
	<meta HTTP-EQUIV="REFRESH" content="2; url=admin.php">
	<title>Berhasil Cetak Excel</title>
</head>
<body>
<br><br><br><center><h1>Berhasil Simpan Data</h1></center>
</body>
</html>