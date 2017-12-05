<head>
	<title>CATURBIKERSLAND</title>
	<link rel="stylesheet" type="text/css"
	media="all" href="style7.css">
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="headerfix.jpg" class="header">
		</div>
		<div id="menu">
			<ul>
				<li><a href="index7.php">Beranda</a></li>
				<li><a href="profil.php">Tentang Komunitas</a></li>
				<li><a href="kontak.php">Daftar Member</a></li>
			</ul>
			</div>
		<div id="runningtext">
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
			GASS GASS GASS GASS GASS
		</marquee>
		</div>
		
		<div id="kontak">
			<div class="kontak">
			<h2> DAFTAR MEMBER </h2><br>
				<form>
				<table class="tablekontak">
				<tr>
					<td class="kolom1"> Nama Lengkap </td>
					<td class="kolom2"> <INPUT TYPE=text NAME=txtNama size="108"> </td>
				</tr>
				<tr>
					<td> E-mail </td>
					<td> <INPUT TYPE=text NAME=txtemail size="108"> </td>
				</tr>
				<tr>
					<td> No. HP </td>
					<td> <INPUT TYPE=text NAME=txtnohp size="108"> </td>
				</tr>
				<tr>
					<td> Kota </td>
					<td> <INPUT TYPE=text NAME=txtkota size="108"> </td>
				</tr>
				<tr>
					<td> Kenapa Ikut Komunitas Ini </td>
					<td> <textarea cols="110" rows="10"></textarea> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>	
				
				<tr>
					<td>&nbsp;</td>
					<td><INPUT TYPE=submit NAME=kirim value=&nbsp;&nbsp;kirim&nbsp;&nbsp;>&nbsp;&nbsp;<INPUT TYPE=Reset Name=reset Value=&nbsp;&nbsp;reset&nbsp;&nbsp;> </td>
				</tr>
				<div id="sidebar">
		
				
			</table>
			</form>
			</div>
		</div>
		<div id="footer"> CATURBIKERSLAND @ 2017  </div>
	</div>
</body>
</html>
