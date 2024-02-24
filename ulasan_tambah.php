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
            if(isset($_POST['submit'])) {
                $id_buku = $_POST['id_buku'];
                $id_user = $_SESSION['user']['id_user'];
                $ulasan = $_POST['ulasan'];
                $rating = $_POST['rating'];
                $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) values('$id_buku','$id_user','$ulasan','$rating')");
                if($query){
                    echo '<script>alert("Tambah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Tambah Data Gagal!");</script>';
                 }
            }
            ?>
            <div class="row">
                <div class="col-md-2">Buku</div>
                <div class="coll-md-8">
                    <select name="id_buku" class="form-control">
                        <?php
                            $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                            while($buku = mysqli_fetch_array($buk)) {
                                ?>
                                 <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
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
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>         
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
           