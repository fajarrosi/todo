<?php
    require_once('main.php');


    $id = $_GET['id'];
    $query = "DELETE FROM todos WHERE id = $id";

    $eksekusi = query($query);
    if ($eksekusi) {
        header('location: ../index.php?pesan= Data berhasil dihapus');
    }else{
        header('location: ../index.php?pesan= Data gagal');

    }