<?php

if(isset($_GET['id'])){
    $sql_cek = "select * from siswa where id='".$_GET['id']."'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php

    $sql_hapus = "DELETE FROM siswa WHERE id='".$_GET['id']."'";
    $query_hapus = mysqli_query($conn, $sql_hapus);
    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'data?page=data-siswa'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'data?page=data-siswa'
        ;}})</script>";
    }
