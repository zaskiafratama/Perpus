<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=peminjaman_tambah"  class="btn btn-outline-dark"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
        <table class="table table-bordered" id="dataTable" widht="100%" cellspacing="0">
        <style>
            body{
                background-image: url('assets/img/h.jpg');
                background-size: cover;
            }
        </style>  
            
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Foto</th>
                <th>Tgl Peminjaman</th>
                <th>Tgl Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT jOIN user on user.id_user = peminjaman.id_user 
              LEFT jOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>

                    <td><?php echo $i++;?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><img width="100px" src="assets/img/<?php echo $data['foto']; ?>"></td>
                    <td><?php echo $data['tanggal_peminjaman']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjaman']; ?></td>
                    <td>
                        <?php
                            if($data['status_peminjaman'] != 'dikembalikan') {
                        ?>
                    <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-outline-secondary">Ubah</a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-outline-danger">Hapus</a>
                    <?php
                    }
                    ?>
                </td>
            </td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

