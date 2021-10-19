<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TUGAS 6</title>
</head>
<body>
	<p>NAMA : EKI WANDANA PUTRA</p>
	<p>NIM  : 12190145</p>
	<p>KELAS: 12.5A.11</p>
<h2>INPUT</h2>
		<table>
		<form action="output.php" method="POST">
		  <tr>
		    <td>nilai 1</td>
		    <td><input type="number" name="nilai_satu" placeholder="masukkan nilai 1" class="input"></td>
		  </tr>
		  <tr>
		    <td>nilai 2</td>
		    <td><input type="number" name="nilai_dua" placeholder="masukkan nilai 1" class="input"></td>
		  </tr>
		  <tr>
		  	<center>
		  		<td colspan="2">
			  		<input type="radio" name="lis" value="segitiga" >
	  				<label>Segitiga</label> 
	  				<br/> 
	  				<input type="radio" name="lis" value="persegi" >
	  				<label>Persegi Panjang</label>
  				</td>
		  </tr>
		  <tr>
		  	<td style="border: 0;" colspan="2">
		  		<button type="submit" name="submit">submit</button>
		  		<button type="submit" name="batal">batal</button>
		  	</td>
		  </tr>
		  </form>
		</table>
</body>
</html>