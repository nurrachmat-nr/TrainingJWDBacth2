<?php
echo "Ini statement 1";
echo "<br/>";
echo "Ini statement 2";
echo "<br/>";
// varibel 
$a = 10;
$b = 5;
$c = $a+$b;
echo $c; //15
echo "<br/>";
$nama = "Nur Rachmat";
$NAMA = "Rachmat Nur";

echo $nama . " ". $NAMA;
echo "<br/>";
// Komentar single line
/*
* Ini Komentar
* Lebih dari 1 baris
* Gunakan /* ... *\/
*/

$umur = 18;
if($umur > 18){
    echo "Kamu sudah dewasa";
    echo "Kamu boleh minum kopi";
}else{
    echo "Kamu masih kecil";
    echo "Kamu hanya boleh minum susu";
}