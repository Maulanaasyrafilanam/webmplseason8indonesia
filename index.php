<?php 
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS PWEB-TOURNAMENT menu awal</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
     
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="https://id-mpl.com/">
        <img src="mpllogo.png" width="75px">        MPL INDONESIA SEASON 8</a>
        <a class="navbar-brand ps-3" ></a>
        <div class="dropdown">
  <a class="navbar-brand ps-3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Profil
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="https://www.instagram.com/mpl.id.official/?hl=en">Instagram</a>
    <a class="dropdown-item" href="https://www.facebook.com/mpl.id.official/?ref=bookmarks">Facebook</a>
    <a class="dropdown-item" href="https://www.youtube.com/channel/UC1dGHGJTXU_dkiR8tW3qQgg">Youtube</a>
  </div>
</div>
<div class="dropdown">
  <a class="navbar-brand ps-3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tentang MPL
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="https://id-mpl.com/">Season 7</a>
    <li><hr class="dropdown-divider" /></li>
    <a class="dropdown-item" href="https://id-mpl.com/s6">Season 6</a>
    <li><hr class="dropdown-divider" /></li>
    <a class="dropdown-item" href="https://id-mpl.com/s5">Season 5</a>
  </div>
</div>
</div>

            
    </ul>     
  </li>
            <a class="navbar-brand ps-3" href="masuk.php">point masuk team </a>
            <a class="navbar-brand ps-3" href="keluar.php">point keluar team</a>
</div>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" position="right">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">NAMA-NAMA TEAM</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">daftar team-team yang bertanding pada MPL INDONESIA SEASON 8</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah team
                        </button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama team </th>
                                            <th>Nama pemain </th>
                                            <th>Point sekarang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            $ambilsemuadatastock = mysqli_query($conn,"select * from stock ");
                            $no=1;
                            while($data= mysqli_fetch_array(($ambilsemuadatastock))){
                                    
                                    $namabarang = $data['namabarang'];
                                    $deskripsi = $data['deskripsi'];
                                    $stock = $data['stock'];
                                            ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?=$namabarang;?></td>
                                            <td><?=$deskripsi;?></td>
                                            <td><?=$stock;?></td>
                                        </tr>
                                        <?php
                                    };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; maulana</div>
                            <div>
                                <a href="https://www.instagram.com/maulana_rafi._/">My instagram</a>
                                &middot;
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Tambah Team</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
            <label>Nama Team </label><br>
        <input type="text" name="namabarang"  class="from-control"><br>
        <br>
            <label>nama pemain</label><br>
        <input type="text" name="deskripsi"  class="from-control"><br>
        <br>
            <label>+ point</label><br>
        <input type="number" name="stock" class="from-control"><br>
        <br>
        <button type="submit" class="btn btn-primary" name="addnewbarang">OK</button>
        </div>
        
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
    </div>
    </div>
</div>

</html>
