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
        <style type="text/css">
        	.nomor_antrian {
				font-size: 400px;
				color: #414157;
				font-weight: bold;
			}
			.text1 {
				font-size: 40px;
				color: #414157;
				font-weight: bold;
			}
			.text2 {
				font-size: 50px;
				color: #414157;
				font-weight: bold;
			}
			.text3 {
				font-size: 20px;
				color: #414157;
			}
		</style>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <center><div class="card-header"><h3 class="text-center font-weight-light my-4">ANTRIAN KLINIK</h3></div></center>
                                    <div class="card-body">
									<center>
									<h1>
									<?php
									session_start();
									?>
									<span class="nomor_antrian"><?php
									echo $_SESSION['antrian'];
									?></span>
									</h1>
									<br>
									<span class="text1"><?php
									echo $_SESSION['nama'];
									?></span>
									<br>
									<span class="text1"><?php
									echo $_SESSION['tgl_periksa'];
									?></span>
									<br>
									<span class="text2"><?php
									if ($_SESSION['keterangan']=='L') {
										echo "PASIEN LANSIA";
									}
									else{
										echo "PASIEN UMUM";
									}
									?></span>
									<br>
									<br>
									<span class="text3">Screenshot Halaman ini sebagai bukti antrian<br>Terima Kasih</span>									
									</center>
 									</div>
                                        </form>
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