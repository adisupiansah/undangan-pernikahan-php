<?php 
$koneksi = mysqli_connect("localhost", "root", "", "undangan");

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $koneksi;

    $nama = htmlspecialchars( $data["nama"]);
    $status = htmlspecialchars( $data["status"]);
    $komentar = htmlspecialchars( $data["komentar"]);

    $query = "INSERT INTO pernikahan (nama, status, komentar)
    VALUES ('$nama', '$status', '$komentar')";


    mysqli_query($koneksi, $query);

     
}

















?>
