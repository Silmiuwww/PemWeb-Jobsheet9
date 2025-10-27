<?php
$conn = pg_connect("host=localhost dbname=prakwebdb user=postgres password=bakmi1");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}

$username = "admin";
$password = md5("123");

$query = "INSERT INTO public.user (username, password) VALUES ('$username', '$password')";

$result = pg_query($conn, $query);

if ($result) {
    echo "Data user berhasil dimasukkan ke PostgreSQL.";
} else {
    echo "Gagal menambahkan data: " . pg_last_error($conn);
}

pg_close($conn);
?>
