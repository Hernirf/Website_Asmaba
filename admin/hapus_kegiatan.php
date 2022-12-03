<?php

require '../konek.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $result=mysqli_query($db, 
    "DELETE FROM kegiatan WHERE id='$id'");

    if($result){
        echo "
            <script>
                alert('Jadwal kegiatan Berhasil Dihapus');
                document.location.href='table_kegiatan.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Jadwal kegiatan Gagal Dihapus');
            </script>
        ";
    }
}

?>
