<h1 class="mt-4">Kategori Buku</h1>
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
            if(isset($_POST['submit'])){
                $kategori = $_POST['kategori'];
                $query = mysqli_query($koneksi, "INSERT INTO kategori_buku(kategori) values('$kategori')");

                if($query){
                    echo '<script>alert("Tambah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Tambah Data Gagal!");</script>';
                 }
            }
            ?>
            <div class="row">
                <div class="col-md-4">Nama Kategori</div>
                <div class="coll-md-8"><input type="text" class="form-control" name="kategori"></div>
            </div>
            <div class="row">
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
