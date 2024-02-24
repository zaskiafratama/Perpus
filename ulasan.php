<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-outline-dark">+ Tambah Data</a>
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
                <th>Ulasan</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM ulasan LEFT jOIN user on user.id_user = ulasan.id_user LEFT jOIN buku on buku.id_buku = ulasan.id_buku");
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>

                    <td><?php echo $i++;?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><img width="100px" src="assets/img/<?php echo $data['foto']; ?>"></td>
                    <td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                    <td>
                        <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-outline-secondary">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-outline-danger">Hapus</a>
            </td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

