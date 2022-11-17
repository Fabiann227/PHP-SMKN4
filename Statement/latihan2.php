<?php
$cuaca = "cerah"; //cuaca saat ini adalah cerah

if ($cuaca == "mendung") { //jika cuaca mendung
    echo "maka saya akan menyiapkan payung";
}

else if ($cuaca == "cerah") { //sebaliknya jika cuaca cerah
    echo "maka saya akan berangkat sekolah";
}

else { //sebaliknya jika sedang hujan atau cuaca lainnya
    echo "maka saya akan tidur";
}
