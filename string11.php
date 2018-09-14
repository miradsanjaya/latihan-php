<?php
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 15, "<br>");
echo $text."<br><br>";
echo $newtext;



$a = substr ($nim, 2, 2);
switch($a) {
case '11' : $jurusan = "Teknik Informatika";
break;
case '22' : $jurusan = "Sistem Informasi";
break;
case '33' : $jurusan = "Sistem Komputer";
break;
case '44' : $jurusan = "Komputerisasi Akuntansi";
break;
default
: $jurusan = "Salah jurusan";
}
echo "Nim Anda : $nim<br>";
echo "Jurusan Anda : $jurusan";

?>