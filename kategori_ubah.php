<h1 class="mt-4">ubah Kategori Buku</h1>
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
              $id =$_GET['id'];
            if(isset($_POST['submit'])){
                $kategori = $_POST['id_kategori'];
                $query = mysqli_query($koneksi, "UPDATE kategori_buku set kategori='$kategori'WHERE id_kategori=$id");

                if($query){
                    echo '<script>alert("Tambah Data Berhasil");</script>';
                 }else {
                     echo '<script>alert("Tambah Data Gagal!");</script>';
                 }
            }
           
            $query= mysqli_query($koneksi,"SELECT*FROM kategori_buku where id_kategori=$id");
            $data =mysqli_fetch_array($query);
            ?>
            <div class="row">
                <div class="col-md-4">Nama Kategori</div>
                <div class="coll-md-8"><input type="text" class="form-control"value=<?php echo $data['kategori'];?> name="id_kategori"></div>
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
           