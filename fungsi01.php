<?php
function cetak_ganjil(){
    for($i= 0; $i<100; $i++ ){
    if($i % 2 == 1){
        echo"$i";
       }
    }
}
//pemanggulan funsi
 cetak_ganjil();
//Program sederhana mendefinisikan dan memanggil fungsi tanpa
//parameter dan tanpa return value
?>
