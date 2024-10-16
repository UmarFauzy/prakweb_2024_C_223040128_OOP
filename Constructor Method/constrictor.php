<?php 

// Jualan Produk 
// Komik 
// Game 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga )
    {
        $this->$judul = $judul;
        $this->$penulis = $penulis;
        $this->$penerbit = $penerbit;
        $this->$harga = $harga;
    }
    

    public function getlabel(){
        return "$this->judul, $this->penulis ";
    }

}

$Produk1 = new Produk("Naruto", "Umaru", "Gramedia", 30.000);
$Produk2 = new Produk("One Piece", "Oda Sensei", "Toei Animation", 40.000);

echo "komi : " . $Produk1->getlabel();
echo "<br>";
echo "Game :" . $Produk2->getlabel();

?>