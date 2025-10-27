<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM public.user WHERE username='$username' and password='$password'";
$result = pg_query($conn, $query);
$cek = pg_num_rows($result);

if($cek){
    echo "Anda berhasil login. silahkan menuju ";
    ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
} else {
    echo "Anda gagal login. silahkan ";
    ?>
    <a href="loginForm.html">Login kembali</a>
    <?php
    echo pg_last_error($conn);
}
?>
