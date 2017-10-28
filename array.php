<html>
  <head>
     <title>Array</title>
  </head>

  <body>
  	<?php
  		
  		$nama_siswa=array('Sinta','Dewi','Doni','Alif','Winda');

  		echo " Hello  $nama_siswa[2] <br>";
  		$nilai_siswa=array(
  			'dewi'=>80,
  			'sinta'=>90,
  			'doni'=>100,
  			'alif'=>50	
  		);
  		echo " Nilai Sinta:  ". $nilai_siswa['sinta']." <br>";
  		
  		for($i=0;$i<count($nama_siswa);$i++){
  			echo " Hello  $nama_siswa[$i] <br>";
  		}

  		foreach ($nilai_siswa as $nama => $nilai) {
  			echo " Nilai $nama:  $nilai <br>";
  		}
  		$no=1;
  	?>
  	<table border="1">
  		<tr>
  			<th>No</th>
  			<th>Nama</th>
  			<th>Nilai</th>
  		</tr>
  		<?php foreach ($nilai_siswa as $nama => $nilai) {?>
  		<tr>
  			<td><?php echo $no++;?></td>
  			<td><?php echo $nama; ?></td>
  			<td><?php echo $nilai; ?></td>
  		</tr>
  		<?php }?>
  	</table>
  </body>
  </html>