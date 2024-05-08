<?php
     $tenDN = $_POST["username"];
     $mk = $_POST["password"];

     if($tenDN == "getun" && $mk =="123") {
        header("location:index.php");
        exit();
     }
     else{
        header("location:login.php");
        exit();
    }
?>