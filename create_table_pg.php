<?php
$conn = pg_connect("host=localhost dbname=prakwebdb user=postgres password=bakmi1");

if (!$conn) {
    die("Koneksi gagal.");
}

$query = "CREATE TABLE IF NOT EXISTS public.user (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";
$result = pg_query($conn, $query);

if ($result) {
    echo "Tabel user berhasil dibuat di PostgreSQL.";
} else {
    echo "Gagal membuat tabel.";
}

pg_close($conn);
?>
