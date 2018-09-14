<?php
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user == "asapiraku" && $pass == "12345" ){
        echo"<h2>login berhasil kawan</h2>";
    } else{
        echo"<h2>login gagal , mohon periksa kembali </h2><tr>";
    }
}
?>