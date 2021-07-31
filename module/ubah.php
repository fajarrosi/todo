<?php
    require_once('main.php');


    $aktifitas = $_POST['aktifitas'];
    $id = $_POST['id'];
    // $get_data = "SELECT aktifitas FROM todos WHERE id=$id";

    $query = "UPDATE  todos SET aktifitas  = '$aktifitas' WHERE id = $id";


    $eksekusi = query($query);
    if ($eksekusi) {
        header('location: ../index.php?pesan= Data Berhasil Diubah');
    }else{
        header('location: ../index.php?pesan= Data gagal');

    }