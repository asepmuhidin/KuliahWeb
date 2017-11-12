<html>
  <head>
     <title>Array</title>
  </head>

  <body>
  <?php
  	$nilais=array(
  		'001'=>array(
  				'nama'=>'Hesti',
  				'nilai'=>80
  			),
  		'002'=>array(
  				'nama'=>'Dewi',
  				'nilai'=>90
  			),
  		'003'=>array(
  			'nama'=>'Budi',
  			'nilai'=>90
  		)
  	);	
  ?>
  <table border="1">
  	<tr>
  		<th>NIM</th>
  		<th>Nama Mahasiswa</th>
  		<th>Nilai</th>
  	</tr>
  	<?php foreach ($nilais as $nim => $nilai) { ?>
  	<tr>
  		<td><?php echo $nim;?></td>
  		<td><?php echo $nilai['nama'];?></td>
  		<td><?php echo $nilai['nilai'];?></td>
  	</tr>
  	<?php }?>
  </table>
  </body>
  </html>