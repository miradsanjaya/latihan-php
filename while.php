<?php
/* contoh 1 */
$i = 1;
while ($i <= 7) {
echo $i++;
}
echo "<br><br>";
/* contoh 2 */
$i = 1;
while ($i <= 15):
echo "$i";
$i++;
endwhile;
echo "<br><br>";
/* contoh 3 */
$i = 1;
while ($i <= 6) {
echo "<h$i>2222$i</h$i>";
$i++;
}
?>