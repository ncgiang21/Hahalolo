<?php
//Kết nối với db mà k phải gọi lại nhiều lần
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "hahalolo";
    $conn=mysqli_connect($host,$username,$password,$dbname);
      if($conn->connect_error){
          die('Connection failed::' .$conn->connect_error);
        }
?>