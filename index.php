<html>
	<head>
	<title>Montigo Shop</title>
	</head>
	<style>
	h1 {
		text-align: center;
		padding-top: 20px;
	}
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: FFECC8;
		width: 80%; 
		margin: 20 auto; 
		text-align: center; 
	}
	img{
		border-radius: 0px;
		 width:750px;
		 height:350px;
	}
	</style>
    
<body>
	<h1 id="text" onmouseover="text1()" onmouseout="text2()" >Selamat Datang ke Montigo Shop</h1>
	<img id="banner" onmouseover="banner1()" onmouseout="banner2()" src="Gambar1.png">
	<h2>Senarai Botol Air Montigo</h2>
	
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
		<tr>
		<th>BIL</th>
		<th>NAMA BOTOL</th>
		<th>JENIS BOTOL</th>
		<th>KOLEKSI</th>
		<th>KAPASITI</th>
		<th>TINDAKAN</th>
		</tr>
	
	<!--memaparkan rekod barang-->
	<?php
	include("config.php");

$query = mysqli_query($connect, "SELECT * FROM barang");
while($row = mysqli_fetch_array($query)){
    echo "<tr>
    <td align='center'>".$row['bilbotol']."</td>
    <td align='center'>".$row['namabotol']."</td>
    <td align='center'>".$row['jenisbotol']."</td>
    <td align='center'>".$row['Koleksi']."</td>
    <td align='center'>".$row['kapasiti']."</td>
    <td align='center'><a href='padam.php?bilbotol=".$row['bilbotol']."' onclick='return returnConfirm()'>Padam</a></td>
    </tr>";
}
?>
	
</table>
	
	<p>
	<a href="tambah.php"><button name='submit'type="submit">TAMBAH BOTOL</button></a><br>
	<p>	
	<button onmouseup="hubungi1()" onmousedown="hubungi2()" >HUBUNGI</button>
	<p id="hubungi" ></p>
		
	<!--fungsi-->
	<script>
		function banner1(){
			document.getElementById("banner").src="Gambar1.png";
		}

		function banner2(){
			document.getElementById("banner").src="Gambar2.png";
		}

		function  hubungi1(){
			document.getElementById("hubungi").innerHTML="08-33669562";
		}

		function  hubungi2(){
			document.getElementById("hubungi").innerHTML="montigoshop@gmail.com";
		}

		function text1(){
			document.getElementById("text").style.color="brown";
			document.getElementById("text").style.fontFamily="Arial";
		}

		function returnConfirm(){
			return confirm("Adakah anda ingin memadam data ini?");
		}
	</script>
	</center>
	</body>
</html>