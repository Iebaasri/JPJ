<!DOCTYPE html>
<html>
<style>
body{
background-color:pink;
}
</style>

<body bgcolor="cyan">
<center>
<form id="form" name="form" method="post" action="pros_insert.php">
<table width="400" border="1">
<tr>
<th scope="col">Nama Pelanggan:</th>
<th scope="col"><div align="left">
<input type="text" name="nama_penuh" value="" size="50"/>
</div>
</th>
</tr>

<tr>
<th scope="col">No Kad Pengenalan:(Tanpa-) </th>
<th scope="col"><div align="left">
<input type="text" name="no_ic" value="" size="12"/>
</div>
</th>
</tr>

<tr>
<th scope="col">Tempat Lahir:</th>
<th scope="col"><div align="left">
<select name="tempat_lahir">
<option value="">Sila Pilih</option>
<option value="johor">Johor</option>
<option value="kedah">Kedah</option>
<option value="kelantan">Kelantan</option>
<option value="melaka">Melaka</option>
<option value="n9">Negeri Sembilan</option>
<option value="pahang">Pahang</option>
<option value="pp">Pulau Pinang</option>
<option value="perak">Perak</option>
<option value="perlis">Perlis</option>
<option value="selngr">Selangor</option>
<option value="ganu">Terengganu</option>
<option value="sbh">Sabah</option>
<option value="srwk">Sarawak</option>
</select>
</div>
</th>
</tr>

<tr>
<th scope="col">Jantina:</th>
<th scope="col"><div align="left">
<input type="radio" name="jantina" value="male">Male<br>
<input type="radio" name="jantina" value="female">Female<br>
</div>
</th>
</tr>

<tr>
<th scope="col">Jenis Lesen:</th>
<th scope="col"><div align="left">
<input type="checkbox" name="jenis_lesen" value="Bike">Motorsikal(B)<br>
<input type="checkbox" name="jenis_lesen" value="Car">Kereta(D)<br>
</div>
</th>
</tr>
</table>

<br>
<center><button type="submit" value="Submit">Hantar</button>
<button type="reset" value="Reset">Isi Semula</button>
</br>
</form>
</br>
</br>

<a href="login.php" target="_top"> Logout</a><br></br>
</center>
</body></html>







