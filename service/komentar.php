<?php

require '../koneksi.php';

if (isset($_POST['komentar'])) {
    $id_blog = $_POST['id_blog'];
    $id_user = $_POST['id_user'];
    $isi = $_POST['isi'];

    $sql = mysqli_query($koneksi, "INSERT INTO komentar SET
    id_user = $id_user,
    id_blog = $id_blog,
    isi_komentar = '$isi'
    
    ");

    echo "
    <script>
    document.location.href='../detail.php?id_blog=1'
    </script>
    ";
};
