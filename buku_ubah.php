<h1 class="mt-4">Ubah Buku</h1>
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
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $judul = $_POST['judul'];
                $foto = $_POST['foto'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $deskripsi = $_POST['deskripsi'];
                $stok = $_POST['stok'];
                $query = mysqli_query($koneksi, "UPDATE buku set  judul='$judul', foto='$foto', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', stok='$stok' WHERE id_buku=$id");

                if($query){
                    echo '<script>alert("Ubah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Ubah Data Gagal!");</script>';
                 }
            }
            $query= mysqli_query($koneksi,"SELECT*FROM buku WHERE id_buku=$id");
            $data =mysqli_fetch_array($query);
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Kategori</div>
                <div class="coll-md-8">
                    <select name="id_kategori" class="form-control">
                        <?php
                            $kat = mysqli_query($koneksi, "SELECT * FROM kategori_buku");
                            while($kategori = mysqli_fetch_array($kat)) {
                                ?>
                                
                                <option <?php if($kategori['id_kategori'] == $data['id_kategori']) echo 'selected'; ?> value="<?php echo $kategori['id_kategori']; ?>" ><?php echo $kategori['kategori'];?></option>
                                <?php

                            }
                    ?>
                    </select>
             </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-2">Judul</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['judul']; ?>" class="form-control" name="judul"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Foto</div>
                <div class="col-md-8"><input type="file" value="<?php echo $data['foto']; ?>" class="form-control" name="foto"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penulis</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['penulis']; ?>" class="form-control" name="penulis"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit']; ?>" class="form-control" name="penerbit"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>
                <div class="col-md-8"><input type="date" value="<?php echo $data['tahun_terbit']; ?>" class="form-control" name="tahun_terbit"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Deskripsi</div>
                <div class="col-md-8">
                    <textarea name="deskripsi" rows="5" class="from-control"><?php echo $data['deskripsi']; ?></textarea>
                    <div class="row mb-3">
                </div>
                <div class="col-md-2">stok</div>
                <div class="col-md-8"><input type="text" value="<?php echo $data['stok']; ?>" class="form-control" name="stok"></div>
            </div>
                </div>
        </div>
            <div class="row mb-3">
                <div class="col-md-4"></div>
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
           