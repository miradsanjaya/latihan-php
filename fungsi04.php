<?php
function tambah_string($str){
    $str = $str .",bandung";
    return $str;
}
//
$str ="universitas komputer";
echo"\$str = $str <br>";
echo tambah_string ($str)."<br>";
echo"\$str =$str<br>";

//Program passing by value dalam fungsi.
?>