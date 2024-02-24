<h1 class="mt-4">Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn-outline-dark">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" widht="100%" cellspacing="0">
        <style>
            body{
                background-image: url('assets/img/h.jpg');
                background-size: cover;
            }
        </style>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Foto</th>
                <th>Penulis</th>
                <th>penerbit</th>
                <th>Tahun terbit</th>
                <th>Deskripsi</th>
                <th>stok</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori_buku on buku.id_kategori = kategori_buku.id_kategori");
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>

                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><img width="100px" src="assets/img/<?php echo $data['foto']; ?>"></td>
                    <td><?php echo $data['penulis']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td><?php echo $data['deskripsi']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td>
                    <a href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>" class="btn btn-outline-secondary">Ubah</a>
                     <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-outline-danger">Hapus</a>
            </td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

