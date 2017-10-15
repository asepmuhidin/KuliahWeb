<html>
  <head>
     <title>Formulir Pendaftaran Online</title>
  </head>

<body>
<h1>Formulir Pendaftaran Siswa</h1>

<form action="" method="GET">
	<table>
		<tr>
			<td>Nama Siswa</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Sekolah Asal</td>
			<td><input type="text" name="asal_sek"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="tlahir"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>Tgl.
				<select name="tgl">
					<?php
					for($i=1;$i<=31;$i++){?>
					<option value="<?php echo $i;?>">
						<?php echo $i;?></option>	
					<?php }?>
				</select>
				Bln.
				<select name="bln">
					<?php
					for($i=1;$i<=12;$i++){?>
					<option value="<?php echo $i;?>">
						<?php echo $i;?></option>	
					<?php }?>
				</select>	
				Tahun.
				<select name="tgl">
					<?php
					for($i=1992;$i<=2010;$i++){?>
					<option value="<?php echo $i;?>">
						<?php echo $i;?></option>	
					<?php }?>
				</select>
			</td>
		</tr>
	</table>
</form>

</body>

</html>