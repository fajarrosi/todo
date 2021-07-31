<?php

function koneksi(){
    $conn = mysqli_connect("localhost","root","","todo");
    if(!$conn){
        die("koneksi gagal");
    }else{
        return $conn;
    }
}

function query($query){
    $koneksi = koneksi();
    $result = mysqli_query($koneksi,$query);
    return $result;
}

function get_result($result)
{
    $data= [];
    while ($row = mysqli_fetch_assoc($result)) {
        // $data.push($row);
        $data[] = $row;
    }
    return $data;
}

function notifikasi($pesan)
{
    echo "<script>alert('$pesan')</script>";
}
?>