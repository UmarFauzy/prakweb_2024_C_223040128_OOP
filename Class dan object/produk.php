<?php 

// Jualan Produk 
// Komik 
// Game 

class Produk {
    public $judul = "Judul",
           $penulis ="Penulis",
           $penerbit = "Penerbit",
           $harga ="harga";


    public function getlabel(){
        return "$this->judul, $this->penulis ";
    }

}

$Produk3 = new Produk();
$Produk3 -> judul = "Naruto";
$Produk3 -> penulis = "Umaru";
$Produk3 -> penerbit = "Gramedia";
$Produk3 -> harga = 30.000;
var_dump($Produk3);

$Produk4 = new Produk();
$Produk4 -> judul = "One Piece";
$Produk4 -> penulis = "Oda Sensei";
$Produk4 -> penerbit = "Toei Animation";
$Produk4 -> harga = "Harga Diri";

echo "komi : " . $Produk3->getlabel();
echo "<br>";
echo "Game :" . $Produk4->getlabel();
// $Produk1 = new Produk ();
// $Produk1 -> judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk ();
// $Produk2 -> tambahProperty = "Hahaha";
// var_dump($Produk2)

?>