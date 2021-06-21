<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tbl_pasien");
$html = '<center><h3>Daftar Pasien</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
	<tr>
    <th>No</th>
    <th>NIK</th>
    <th>NoBPJS</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Provinsi</th>
    <th>Kecamatan</th>
    <th>Tanggal Lahir</th>
    <th>Kota</th>
    <th>Kelurahan</th>
    <th>Tanggal Periksa</th>
    <th>Jenis Kelamin</th>
    </tr>';
$no=1;
while ($row = mysqli_fetch_array($query)) {
	$html .= "<tr>
<td>".$no."</td>
<td>".$row['nik']."</td>
<td>".$row['nobpjs']."</td>
<td>".$row['nama']."</td>
<td>".$row['alamat']."</td>
<td>".$row['provinsi']."</td>
<td>".$row['kecamatan']."</td>
<td>".$row['tanggal_lahir']."</td>
<td>".$row['kota']."</td>
<td>".$row['kelurahan']."</td>
<td>".$row['tgl_periksa']."</td>
<td>".$row['jenis_kelamin']."</td>";
$no++;  
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file PDF
$dompdf->stream('Laporan Data Pasien.pdf');
?>