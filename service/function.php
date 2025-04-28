<?php

require  '../koneksi.php';

if (isset($_POST['login'])) {
    // $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE 
    email = '$email' AND
    password = '$password'
    ");
    $tes = mysqli_num_rows($sql);

    if ($tes == 1) {

        $user = mysqli_fetch_assoc($sql);
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;

        echo "
    <script>
    alert('Berhasil Login')
    document.location.href = '../index.php'
    </script>
    ";
    } else {
        echo "
        <script>
        alert('Login Gagal')
        document.location.href = '../login.php'
        </script>
        ";
    }
}

if (isset($_POST['registrasi'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = mysqli_query($koneksi, "INSERT INTO user SET
    nama = '$username',
    email = '$email',
    password = '$password'
    ");

    // $tes = mysqli_num_rows($sql);

    if ($sql) {
        echo "
        <script>
        alert('Tambah Data Berhasil')
        document.location.href = '../login.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Tambah Data Gagal')
        document.location.href = '../register.php'
        </script>
        ";
    }
}
