<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrasi Antrian</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <center><div class="card-header"><h3 class="text-center font-weight-light my-4">Formulir Pengisian Data Diri</h3></div></center>
                                    <div class="card-body">
                                        <form method="post" action="simpandata.php">
                                           <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNik" type="text" placeholder="NIK" name="nik" required />
                                                <label for="inputNik">NIK</label>
                                            </div>
                                             <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNoBPJS" type="text" placeholder="NoBPJS" name="nobpjs" required />
                                                <label for="inputNoBPJS">No BPJS(Jika Tidak Memiliki Tuliskan 0)</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputNama" type="text" placeholder="Nama" name="nama" required />
                                                <label for="inputNama">Nama</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputAlamat" type="text" placeholder="Alamat" name="alamat" required />
                                                <label for="inputAlamat">Alamat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputProvinsi" type="text" placeholder="Provinsi" name="provinsi" required />
                                                <label for="inputTelp">Provinsi</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputKecamatan" type="text" placeholder="Kecamatan" name="kecamatan" required />
                                                <label for="inputKecamatan">Kecamatan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTanggalLahir" type="date" placeholder="TanggalLahir" name="tanggal_lahir" required />
                                                <label for="inputTanggalLhair">Tanggal Lahir</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputKota" type="text" placeholder="Kota" name="kota" required />
                                                <label for="inputKota">Kota</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputKelurahan" type="text" placeholder="Kelurahan" name="kelurahan" required />
                                                <label for="inputKelurahan">Kelurahan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTanggalPeriksa" min="<?= date('Y-m-d'); ?>" type="date" placeholder="TanggalPeriksa" name="tgl_periksa" required />
                                                <label for="inputTanggalPeriksa">TanggalPeriksa</label> 
                                            </div>
                                            <p>Pilih Jenis Kelamin :</p>
                                              <div>
                                              <input type="radio" id="Laki-Laki" name="jenis_kelamin" value="Laki-Laki">
                                              <label for="Laki-Laki">Laki-Laki</label>
                                              </div>
                                              <div>
                                              <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                                              <label for="perempuan">Perempuan</label>
                                              </div>
                                              <br>                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class= "btn btn-primary" name="btnRegister" value="Daftar"></div>
                                            </div>
                                          
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Anda Admin? Silahkan Klik!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-10">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ahadian Amar M & Salma Nuraini 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
