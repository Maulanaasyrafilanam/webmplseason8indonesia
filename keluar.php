<?php 
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>project akhir pweb-barangkeluar</title>
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
            <a class="navbar-brand ps-3" href="https://id-mpl.com/>
        <img src="mpllogo.png" width="75px"> MPL INDONESIA SEASON 8</a>
        <a class="navbar-brand ps-3" ></a>
            <a class="navbar-brand ps-3" href="index.php">DAFTAR TEAM</a>
            <a class="navbar-brand ps-3" href="masuk.php">poin team masuk </a>
            <a class="navbar-brand ps-3" href="keluar.php">poin keluar team</a>


            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- akhir dari navbar -->

        <!-- sidebar -->
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Stock Barang
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pengurangan point</h1>
                        <ol class="breadcrumb mb-4">

                            <li class="breadcrumb-item active">pengurangan point pada team yang kalah</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            kurangi point team
                        </button>

                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Team</th>
                                            <th>Jumlah point berkurang</th>
                                            <th>Team yang menang</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php
                            $ambilsemuadatastock = mysqli_query($conn,"select * from keluar k,stock s where s.idbarang = k.idbarang");
                            while($data= mysqli_fetch_array(($ambilsemuadatastock))){
                                    $tanggal = $data['tanggal'];
                                    $namabarang = $data['namabarang'];
                                    $qty = $data['qty'];
                                    $penerima = $data['penerima'];
                                            ?>

                                        <tr>
                                            <td><?=$tanggal;?></td>
                                            <td><?=$namabarang;?></td>
                                            <td><?=$qty;?></td>
                                            <td><?=$penerima;?></td>
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
                        <div class="text-muted">Copyright &copy; UAS PWEB</div>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
        <!-- The Modal -->
        <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="POST">
        <div class="modal-body">
            <select name="barangnya" class="from-control">
            <?php
            $ambilsemuadatanya = mysqli_query($conn," select * from stock");
            while( $fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                $namabarangnya = $fetcharray['namabarang'];
                $idbarangnya = $fetcharray['idbarang'];
                ?>
                <option value="<?=$idbarangnya;?>"><?=$namabarangnya;?></option>
            <?php
            }
                ?>
            </select><br>
            <br>
        <input type="number" name="qty" class="from-control" placeholder="jumlah point(-)" required><br>
        <br>
        <input type="text" name="penerima" class="from-control" placeholder="team menang"><br>
        <br>

        <button type="submit" class="btn btn-primary" name="addbarangkeluar">Submit</button>
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