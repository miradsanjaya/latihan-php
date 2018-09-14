<?php
//Program menampilkan seluruh isi array dengan index numerik//
$arrwarna = array("blue","black","red","yellow","green");
echo" menampilkan isi array dengan for :<br>";
for ($i=0; $i<count($arrwarna); $i++){;
echo"do you like <font color=$arrwarna[$i]>".$arrwarna[$i]."</font> ?<br>";
}

echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
echo "Do you like <font color=$warna>". $warna ."</font>
?<br>";
}
?>
