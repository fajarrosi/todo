<?php
    require_once('main.php');


    $aktifitas = $_POST['aktifitas'];
    $query = "INSERT INTO todos (aktifitas) VALUE ('$aktifitas')";

    $eksekusi = query($query);
    if ($eksekusi) {
        header('location: ../index.php?pesan= Data berhasil ditambahkan');
    }else{
        header('location: ../index.php?pesan= Data gagal');

    }