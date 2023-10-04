<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota= '".$_GET['id']."'");
        echo '<script>window.location="crud-read-anggota.php"</script>';
    }
?>