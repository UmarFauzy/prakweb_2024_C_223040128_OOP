<?php 

// Jualan Produk 
// Komik 
// Game 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk {
    public function cetak( produk $Produk) {
        $str = "{$Produk->judul} | {$Produk->getlabel()} (Rp. {$Produk->harga})";
        return $str;
    }
}

$Produk1 = new Produk("Naruto", "Umaru", "Gramedia", 30000);
$Produk2 = new Produk("One Piece", "Oda Sensei", "Toei Animation", 40000);

echo "Komik : " . $Produk1->getlabel();
echo "<br>";
echo "Game : " . $Produk2->getlabel();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($Produk1);

?>
