<h1 class="mt-4">Ulasan Buku</h1>
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
                $id_buku = $_POST['id_buku'];
                $id_user = $_SESSION['user']['id_user'];
                $ulasan = $_POST['ulasan'];
                $rating = $_POST['rating'];
                $query = mysqli_query($koneksi, "UPDATE ulasan set id_buku='$id_buku',ulasan='$ulasan',rating='$rating' WHERE id_ulasan=$id");
                if($query){
                    echo '<script>alert("Tambah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Tambah Data Gagal!");</script>';
                 }
            }
            $query= mysqli_query($koneksi,"SELECT*FROM ulasan WHERE id_ulasan=$id");
            $data =mysqli_fetch_array($query);
            ?>
            <div class="row">
                <div class="col-md-2">Buku</div>
                <div class="coll-md-8">
                    <select name="id_buku" class="form-control">
                        <?php
                            $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                            while($buku = mysqli_fetch_array($buk)) {
                                ?>
                                <option <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                                <?php

                            }
                    ?>
                    </select>
             </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8">Ulasan</div>
                <div class="coll-md-8">
                    <textarea name="ulasan" rows="5" class="from-control"></textarea>
            </div>
            <div class="row mb-5">
                <div class="col-md-8">Rating</div>
                <div class="coll-md-8">
                    <select name="rating" class="form-control">
                        <option> <?php if($data['id_buku'] == 1) echo 'selected'; ?>1</option>
                        <?php
                            for($i = 1; $i<=10; $i++){
                                ?>
                                <option> <?php  if($data['id_buku'] == $i) echo 'selected'; ?><?php echo $i; ?></option>
                                <?php
                            }
                        ?>  
                </select>
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
           