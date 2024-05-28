<?php
    include 'config.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "Tambahkan"){
            
            $name = $_POST['name'];
            $harga = $_POST['harga'];
            $game = $_POST['game'];

            $query ="INSERT INTO produk_form VALUES(null, '$name', '$harga', '$game')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location:admin_page.php");
            }else {
                echo $query;
            }

        }elseif($_POST['aksi'] == "edit"){
            echo "Edit Data";
        }
    }

    if(isset($_GET['hapus'])){
        $id= $_GET['hapus'];
        $query= "DELETE FROM user_form WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: admin_page.php");
        }else {
            echo $query;
        }
    }

    if(isset($_GET['delete'])){
        $id= $_GET['delete'];
        $query= "DELETE FROM produk_form WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: admin_page.php");
        }else {
            echo $query;
        }
    }
?>