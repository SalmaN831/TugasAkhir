<?php
session_start();

if(!isset($_SESSION['status_admin'])){
    header("location: login.php");
    exit;
}

include('koneksi.php');

//Zona Waktu WIB
date_default_timezone_set('Asia/Jakarta');

//Mengambil Data Pasien
$chart = mysqli_query($koneksi,"select * from tbl_data");
while($row = mysqli_fetch_array($chart)){
    $keterangan[] = $row['keterangan']; 
}

//Pasien
$pasien_lansia = mysqli_query($koneksi,"select * from tbl_data where keterangan='L'");
$count_lansia = mysqli_num_rows($pasien_lansia);
$pasien = mysqli_query($koneksi,"select * from tbl_data where keterangan='BL'");
$count_pasien = mysqli_num_rows($pasien);



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chart Pasien</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="Chart.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="tables.php">Tampilan Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Daftar Pasien
                            </a>
                            <a class="nav-link" href="admin2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Daftar Pasien Lansia
                            </a>
                            <a class="nav-link" href="chart_pasien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Chart Pasien 
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                            echo $_SESSION['username'];
                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Chart Pasien</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Chart Berdasarkan Usia 
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" width="100%" height="35"></canvas>
                                <script>
                                    var ctx = document.getElementById("myChart").getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: <?php echo json_encode($keterangan); ?>,
                                            datasets: [
                                            {
                                                label: 'Pasien Lansia',
                                                data: [<?php echo json_encode($count_lansia); ?>],
                                                backgroundColor: 'rgba(255, 99, 132, 1)',
                                                borderColor: 'rgba(255,99,132,1)',
                                                //mengatur ketebalan garis
                                                borderWidth: 1
                                            },
                                            {
                                                label: 'Pasien',
                                                data: [<?php echo json_encode($count_pasien); ?>],
                                                backgroundColor: 'rgba(66, 135, 245, 1)',
                                                borderColor: 'rgba(66, 135, 245,1)',
                                                //mengatur ketebalan garis
                                                borderWidth: 1
                                            }
                                            ]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero:true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                            <div class="card-footer small text-muted"><?php echo 'Data Diupdate Terakhir Kali Pada : '.date('d-m-Y H:i:s')?></div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ahadian Amar M & Salma Nuraini 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>