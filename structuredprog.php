<script>
    console.log("Hallo JWD");
    console.log("Nama Saya " + "Nur Rachmat");

    var nilai = 75;
    if(nilai > 70){
        console.log("Selamat, Anda Lulus");
    }else{
        console.log("Maaf, Anda tidak Lulus");
    }
    for(var i=0; i<=5; i++){
         console.log(i);
    }

    function hitungpangkat(angka, pangkat){
        //var hasil = angka ^ pangkat;
        var hasil = Math.pow(angka, pangkat);
        return hasil;
    }

    var angka = 9;
    var pangkat = 2;
    var hasil = hitungpangkat(angka, pangkat);

    //a. 18
    //b. 81
    //c. 8
    //d. 7
    //e. Error

    for(var i = 0; i < 10; i++){
        if(i % 2 == 0){
            console.log(i);
        }
    }




</script>











<?php
//Function / Fungsi
function greeting(){
    echo "Hello, world!";
}
//namafungsi();
greeting();

//operator matematika
$a =  1000 * 5; //perkalian
$nilai = 75;
if($nilai > 70){
    echo "Selamat, Anda Lulus";
}else{
    echo "Maaf, Anda tidak Lulus";
}
echo "<br/>";
for($i=1; $i<=5; $i++){
    echo $i. "<br/>";
}

?>