<?php
    require_once('main.php');


    $id = $_GET['id'];
    $query = "UPDATE  todos SET selesai  = 1 WHERE id = $id";

    $eksekusi = query($query);
    if ($eksekusi) {
        header('location: ../index.php?pesan= Data berhasil diselesaikan');
    }else{
        header('location: ../index.php?pesan= Data gagal');

    }