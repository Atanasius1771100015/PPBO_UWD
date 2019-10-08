<?php
//membuat class mobil
class mobil{
//membuat properti
private $merk;
private $harga;

//membuat method konstruktor, dimana mengambil parameter merk
//dan harga dari class sepeda
function __construct($merk,$harga,$warna,$tipe){
$this->merk=$merk;
$this->harga=$harga;
$this->warna=$warna;
$this->tipe=$tipe;
}

//fungsi getter
//membuat method bacamerk
function BacaMerk(){
return $this->merk;
}
//membuat method bacaharga
function BacaHarga(){
return $this->harga;
}
//membuat method bacawarna
function BacaWarna(){
return $this->warna;
}
//membuat method bacatipe
function BacaTipe(){
return $this->tipe;
}
function __destruct(){
echo "Merk dan Harga telah dihapus";
}
}
//membuat objec sepeda dari kelas sepeda, yang
//berisi nilai dari parameter konstructor
$mobil = new mobil("Honda",300000000,"Biru","Civic");
//perintah untuk menampilkan pada browser dimana
//mengambil dari method BacaMerk dan BacaHarga
echo "Merk Mobil = ".$mobil->BacaMerk()."<br>";
echo "Harga Mobil = ".$mobil->BacaHarga()."<br>";
echo "Warna Mobil = ".$mobil->BacaWarna()."<br>";
echo "Tipe Mobil = ".$mobil->BacaTipe()."<br>";
?>
