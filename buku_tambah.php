<h1 class="mt-4">Tambah Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method= "post">
        <style>
            body{
                background-image: url('assets/img/h.jpg');
                background-size: cover;
            }
        </style>
            <?php
            if(isset($_POST['submit'])) {
                $kategori = $_POST['id_kategori'];
                $judul = $_POST['judul'];
                $foto = $_POST['foto'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $deskripsi = $_POST['deskripsi'];
                $stok = $_POST['stok'];
                $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,foto,penulis,penerbit,tahun_terbit,deskripsi,stok) values ('$kategori','$judul','$foto','$penulis','$penerbit','$tahun_terbit','$deskripsi','$stok')");

                if($query){
                    echo '<script>alert("Tambah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Tambah Data Gagal!");</script>';
                 }
            }
            ?>
            <div class="row">
                <div class="col-md-2">Kategori</div>
                <div class="coll-md-8">
                    <select name="id_kategori" class="form-control">
                        <?php
                            $kate = mysqli_query($koneksi, "SELECT*FROM kategori_buku");
                            while($kategori = mysqli_fetch_array($kate)) {
                                ?>
                                <option value="<?php echo $kategori['id_kategori'];?>"><?php echo $kategori['kategori']; ?></option>
                                <?php

                            }
                    ?>
                    </select>
             </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Judul</div>
                <div class="coll-md-8"><input type="text" class="form-control" name="judul"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Foto</div>
                <div class="coll-md-8"><input type="file" class="form-control" name="foto"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penulis</div>
                <div class="coll-md-8"><input type="text" class="form-control" name="penulis"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>
                <div class="coll-md-8"><input type="text" class="form-control" name="penerbit"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>
                <div class="coll-md-8"><input type="date" class="form-control" name="tahun_terbit"></div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8">Deskripsi</div>
                <div class="coll-md-8">
                    <textarea name="deskripsi" rows="5" class="from-control"></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Stok</div>
                <div class="col-md-8"><input type="text" class="form-control" name="stok"></div>
            </div>
        </div>
            <div class="row mb-3">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <button type="submit" class="btn btn-outline-secondary" name="submit" value="submit">Simpan</button>
            <button type="submit" class="btn btn-outline-primary">Reset</button>
            <a href="?page=kategori" class="btn btn-outline-success">Kembali</a>
</div>
</div>
        </form>
    </div>
</div>
</div>
</div>
           