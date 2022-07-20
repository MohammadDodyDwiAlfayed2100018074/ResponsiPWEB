<html>
	<head>
		<title>My Guest Book</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">PEMESANAN </font></strong></div>
			<form name="form1" method="POST" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Pemesan</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Makanan</td>
						<td><input name="makanan" type="text" id="makanan"></td> </tr>
					</tr

					<tr>
						<td>Level Pedas?</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::
		</a></strong></div>

	</body>
</html>