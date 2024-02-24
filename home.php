<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">
                                    <style>
            body{
                background-image: url('assets/img/h.jpg');
                background-size: cover;
            }
        </style>
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori_buku"));
                                    ?>
                                        Total Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                                    ?>
                                        Total Buku</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                                    ?>
                                        Total Ulasan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                    <?php
                                        echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                                    ?>
                                        Total User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">

                                <tr>
                                    <td width="200">Nama</td>
                                    <td width="1">:</td>
                                    <td><?php echo $_SESSION['user']['nama']; ?></td>
                                </tr>

                                <tr>
                                    <td width="200">Level User</td>
                                    <td width="1">:</td>
                                    <td><?php echo $_SESSION['user']['level']; ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Login</td>
                                    <td width="1">:</td>
                                    <td><?php echo date('d-m-Y'); ?></td>
                                </tr>
                        
                        </table>
                        </div>
                        </div>
                        













