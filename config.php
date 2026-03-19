<?php
$conn = mysqli_connect("localhost", "root", "", "userdetail");
if($conn->connect_error){
    die("DB error");
}

?>