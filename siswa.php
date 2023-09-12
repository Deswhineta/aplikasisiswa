<?php
include 'koneksi_dbsiswa.php';
session_start();

if(!isset($_SESSION['username'])) {
    header ('location:login.php');
}

?>

<?php include 'header.php' ?>
<?php include 'sidebar.php'?>

<?php 
$sql= "SELECT siswa.id as id, nama, jeniskelamin, nomor_hp, alamat_siswa, nama_kelas, ayah, ibu, nama_kota FROM siswa 
INNER JOIN kelas 
ON siswa.kelas_id=kelas.id 
INNER JOIN orangtua 
ON siswa.orangtua_id=orangtua.id 
INNER JOIN kota 
ON siswa.kota_id=kota.id;"; 

$dataquery= mysqli_query($conn, $sql);

?>

<div class="content-wrapper">
        <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Siswa </h4>
                  <p class="card-description">
                    Tambah Data <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Asal Kota</th>
                        <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php foreach ($dataquery as $key => $data){ ?>
                        <tr>
                            <td><?= $key + 1?></td>
                            <td><?= $data['nama']?></td>
                            <td><?= $data['jeniskelamin']?></td>
                            <td><?= $data['nomor_hp']?></td>
                            <td><?= $data['alamat_siswa']?></td>
                            <td><?= $data['nama_kelas']?></td>
                            <td><?= $data['ayah']?></td>
                            <td><?= $data['ibu']?></td>
                            <td><?= $data['nama_kota']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']?>">Edit</a>
                                <a href="hapus.php?id=<?php echo $data['id']?>">Hapus</a>
                            </td>
                        </tr>
                    <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>   
</div>


<?php include 'footer.php'?>    