<?php

$no_channel=300;

switch($no_channel){
	case 1:$tv="NET";break;
	case 2:$tv="MNCTV";break;
	case 3:$tv="INDOSIAR";break;
	case 4:$tv="RCTI";break;
	case 5:$tv="SCTV";break;
	default : $tv="Salah tekan tombol";
}





echo "Anda sedang menonton $tv";
	
?>