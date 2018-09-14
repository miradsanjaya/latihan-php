<html>
<head><title>sistem rapot sederhana bahagia</title></head>
<body>
<center><h2>penilaian rapot siswa dan siswi</h2></center>

<form action="prosessoal.php" method="post" name = "input">
<table>
<tr>
<th>Nama</th>
<td><input type="text"name="nama"></td>
</tr>
<tr>
<th>Nomber</th>
<td><input type="number" name="nomber"></td>
</tr>
<tr>
<th>Alamat</th>
<td><textarea name="alamat" cols="40" rows="5"></textarea> </td>
</tr>
<tr>
<th>Jenis kelamin</th>
<td><input type="radio" name="jk" value="laki-laki" checked>laki-laki
     <input type="radio" name="jk" value="perempuan">perempuan</td>
</tr>
<tr>
<th>Agama anda</th>
<td><select name="Agama">
  <option value="Islam">Islam</option>
  <option value="Budha">Budha</option>
  <option value="Kristen">Kristen</option>
  <option value="Khonghucu">Khonghucu</option>
  <option value="lainnya">lainnya</option>
  </select></td>
</tr>
<tr>
<th>Asal Sekolah</th>
<td><input type="text" name="sekolah"></td>
</tr>
<tr>
<th>Nama Orang Tua/Wali</th>
<td><input type="text" name="orang"></td>
</tr>
<tr>
<th>Mata Pelajaran yang disukai</th>
<td><input type="checkbox" name="1" value="MTk"checked>MTK
    <input type="checkbox" name="2" value ="IPA">IPA
    <input type="checkbox" name="3" value ="IPS">IPS
    <input type="checkbox" name="4" value ="PPKN">PPKN
    <input type="checkbox" name="5" value ="PAI">PAI
    <input type="checkbox" name="6" value ="B.INDO">B.INDO
    </td>
</tr>
<tr>
<th>Total Nilai Ijasah SD</th>
<td><input type="number" name ="nomber"></td>
</tr>
<tr>
<th>Email</th>
<td><input type = email="text" name="email"</td>
</tr>
<tr>
<th></th>
<td><input type="submit" name="Pilih" value="Input Data"></td></tr>

</table>
</form>
    
</body>
</html>  