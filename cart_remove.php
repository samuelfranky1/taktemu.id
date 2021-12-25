<?php
    require 'config/connection.php';
    session_start();
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from keranjang where qty='$barang' and id_barang='$id_keranjang'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: produk.php');
?>