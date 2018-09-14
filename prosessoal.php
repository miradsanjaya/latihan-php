<?php
if(isset($_POST['Pilih'])){
    $nama = $_POST['nama'];
    echo"Nama Anda : <font color=blue>$nama<b></b></font>  <br>";
    $nomber= $_POST['nomber'];
    echo"nomor induk siswa : <font color=blue>$nomber<b></b></font> <br>";
    $alamat = $_POST['alamat'];
    echo"Alamat : <font color=blue>$alamat<b></b></font> <br>";
    $jk =$_POST['jk'];
    echo"Jenis Kekamin :<font color=blue>$jk<b></b></font> <br>";
    $Agama =$_POST['Agama'];
    echo"agama:<font color=blue>$Agama<b></b></font> <br>";
    $sekolah=$_POST['sekolah'];
    echo"asal sekolah : <font color=blue>$sekolah<b></b></font> <br>";
    $orang=$_POST['orang'];
    echo"Nama Orang Tua :<font color=blue>$orang<b></b></font> <br>";
        }
    
        echo "pelajaran yang disukai :<br>";
        if (isset($_POST['1'])) {
        echo "- " . $_POST['1'] . "<br>";
        }
        if (isset($_POST['2'])) {
        echo "- " . $_POST['2'] . "<br>";
        }
        if (isset($_POST['3'])) {
        echo "- " . $_POST['3'] . "<br>";
        }
        if (isset($_POST['4'])) {
        echo "- " . $_POST['4'] . "<br>";
        }
        if (isset($_POST['5'])) {
        echo "- " . $_POST['5'] . "<br>";
        }
        if (isset($_POST['6'])) {
        echo "- " . $_POST['6'] . "<br>";
            }
            $number =$_POST['nomber'];
            echo"Nilai Ijazah : <font color=blue>$nomber<b></b></font> <br>";
            $email =$_POST['email'];
            echo"Email : <font color=blue>$email<b></b></font>  <br>";
?>   