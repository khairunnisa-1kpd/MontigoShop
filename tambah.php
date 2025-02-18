<!--sambungan ke pangkalan data-->
<?php
include("config.php");
?>

<html>
<head>
<title>Montigo Shop</title>
</head>
<style>
	h2 {
	 text-align: center;
	 padding-top: 20px;
	}
	body {
	 background-color: FFECC8;
	 width: 80%;
	 margin: 50 auto;
	 text-align: center;
	}
	img{
		width :750;
		height :350;
	}
	table{
		border:0;
		background-color:white;
		padding:20px;
		border-top:2px solid black;
		border-left:2px solid black; 
		border-right:2px solid black; 
		border-bottom:2px solid black; 
		border-radius:10px;
	}
</style>
    
<body>
	<h2>Senarai Botol Air Montigo</h2>
	<center>
	<img id="banner" src="Gambar1.png" onmouseover="banner1()" onmouseout="banner2()" width="750" height="350" /> 
	<p>
	<table>
	<form method="post" action="">
	<tr>
		<td>ID Botol</td><td>:</td><td> <input type="text" name="bilbotol" required><br><br></td>
	</tr>
	<tr>
		<td>Nama Botol</td><td>:</td><td> <input type="text" name="namabotol" required><br><br></td>
	</tr>
	<tr>
		<td>Jenis Botol</td><td>:</td><td> <input type="text" name="jenisbotol" required><br><br></td>
	</tr>
	<tr>
		<td>Koleksi</td><td>:</td><td> <input type="text" name="koleksi" required><br><br></td>
	</tr>
	<tr>
		<td>Kapasiti</td><td>:</td><td> <input type="text" name="kapasiti" required><br><br></td>
	</tr>
	<tr>
		<td colspan=3><center> <input type="submit" name="submit" value="HANTAR" ><br></td>
	</tr>
	</form>
	
	<!--menambah rekod barang-->
	<?php
	if(isset($_POST['submit'])){
		$bilbotol=$_POST['bilbotol'];
		$namabotol=$_POST['namabotol'];
		$jenisbotol=$_POST['jenisbotol'];
		$koleksi=$_POST['koleksi'];
		$kapasiti=$_POST['kapasiti'];

		$result=mysqli_query($connect,"INSERT INTO barang (bilbotol, namabotol, jenisbotol, koleksi, kapasiti) 
		VALUES('$bilbotol','$namabotol','$jenisbotol','$koleksi','$kapasiti')");


			header("location:index.php");
	}
	?>
	
	
	</tr>
	</table>
	
	<!--fungsi-->
	<script>
		function banner1(){
			document.getElementById("banner").src="Gambar1.png";
		}

		function banner2(){
			document.getElementById("banner").src="Gambar2.png";
		}

	</script>
	</body>
</html>

