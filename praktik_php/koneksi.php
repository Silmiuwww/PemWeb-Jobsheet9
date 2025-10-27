<?php
$conn = pg_connect("host=localhost dbname=prakwebdb user=postgres password=bakmi1");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>
