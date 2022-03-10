<div class="row">
           <!-- Circle Buttons -->
           <div class="card shadow mb-4">
           <div class="card-header py-3">
           <h6 class="m-0 font-weight-bold text-primary"><center>Data Kelas</h6>
                        <div class="card-body">
                        <table id="example1" border="1" cellpadding="10" cellspasing="0" width="100%">
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Mata pelajaran</th>
                                                <th>nama kelas</th>
                                        </tr>
                                </thead>
                                                                <tbody>
<?php
//berdasrkan lokal x

if ($_GET['kelas']=='X'){
$username = $_SESSION['username'];
$kelas = $_GET['kelas'];
$no = 1;
$sql = "SELECT * FROM siswa INNER JOIN user INNER join kelas WHERE user.username='$username' and kelas.nama_kelas='$kelas'";
$database = mysqli_query($conn,"SELECT * FROM mapel WHERE id='7'");
$pbo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='10'");
$bindo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='11'");
$query = mysqli_query($conn, $sql);
$mapelx = mysqli_fetch_assoc($database);
$mapelx1 = mysqli_fetch_assoc($pbo);
$mapelx2 = mysqli_fetch_assoc($bindo);
while($data = mysqli_fetch_array($query)) {
    ?>
<tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo "$mapelx[nama_mapel]&nbsp,"; echo "$mapelx1[nama_mapel]&nbsp,"; echo "$mapelx2[nama_mapel]&nbsp,"; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php }?>

<?php }if ($_GET['kelas']=='XI'){
//berdasarkan lokal xi
$username = $_SESSION['username'];
$kelas = $_GET['kelas'];
$no = 1;
$sql = "SELECT * FROM siswa INNER JOIN user INNER join kelas WHERE user.username='$username' and kelas.nama_kelas='$kelas'";
$mm = mysqli_query($conn,"SELECT * FROM mapel WHERE id='17'");
$mtk = mysqli_query($conn,"SELECT * FROM mapel WHERE id='18'");
$bindo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='11'");
$query = mysqli_query($conn, $sql);
$mapelxi = mysqli_fetch_assoc($mm);
$mapelxi1 = mysqli_fetch_assoc($mtk);
$mapelxi2 = mysqli_fetch_assoc($bindo);
while($data = mysqli_fetch_array($query)) {
    ?>
</tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo "$mapelxi[nama_mapel],&nbsp"; echo "$mapelxi1[nama_mapel],&nbsp"; echo "$mapelxi2[nama_mapel],&nbsp"; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php }?>

<?php
}if ($_GET['kelas']=='XII'){
//berasarkan lokal xii
$username = $_SESSION['username'];
$kelas = $_GET['kelas'];
$no = 1;
$sql = "SELECT * FROM siswa INNER JOIN user INNER join kelas WHERE user.username='$username' and kelas.nama_kelas='$kelas'";
$java = mysqli_query($conn,"SELECT * FROM mapel WHERE id='20'");
$agama= mysqli_query($conn,"SELECT * FROM mapel WHERE id='21'");
$bindo = mysqli_query($conn,"SELECT * FROM mapel WHERE id='11'");
$query = mysqli_query($conn, $sql);
$mapelxii = mysqli_fetch_assoc($java);
$mapelxii1 = mysqli_fetch_assoc($agama);
$mapelxii2 = mysqli_fetch_assoc($bindo);
while($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
    <td>
        <?php echo $no++; ?>
    </td>
    <td>
        <?php echo "$mapelxii[nama_mapel],&nbsp"; echo "$mapelxii1[nama_mapel],&nbsp"; echo "$mapelxii2[nama_mapel],&nbsp"; ?>
    </td>
    <td>
        <?php echo $data['nama_kelas']; ?>
    </td>
</tr>
<?php }}?>