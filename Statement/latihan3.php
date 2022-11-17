<?php
$nilai = 8;
switch($nilai)
{
	case 10:
		echo "Sangat Bagus";
		break;

	case 9:
		echo "Bagus";
		break;

	case 8:
		echo "Cukup";
		break;

	case 7:
		echo "Kurang";
		break;

	default: //jika nilai dibawah 7 atau lainnya
		echo "Belajar Lagi Ya!";
		break;
}
?> 