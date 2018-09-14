<?php
$nim = "087650976";
$nama ="mirad sanjaya putra";
$umur = 23;
$nilai = 82.25;
$status = true;
$a="bunda";
echo "NIM : " . $nim . "<br>";
echo "Nama :" .$nama . "<br>";
print"umur :" .$umur;
print"<br>";
printf("nilai : %.3f<br>", $nilai);
if($status){
    echo"status:aktif";
} else{
    echo"status:tidak aktif";
}
?>