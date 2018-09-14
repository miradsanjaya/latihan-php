<html >
<head><title>latihan login</title></head>

<body>
    <form action="" method="post"name="input">
   <center><font color="blue">-Silakan Login Kawan-</font><br><br></center>
    email <input type = email="text" name="email"<br>
    password<input type= password="password" name="password"<tr>
    <input type="submit" name="input"value="simpan">
    </from>

</body>
</html>
<?php
if (isset($_POST['input'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}
  if($email == "kaditukadie@gmail.com" && $password == "112233"){
    echo"login berhasil";
  } else{
      echo"login gagal";
  }

?>





