<?php

class Produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga =  0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // public function sayhello(){
    //     return "Hello World";
    // }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk ();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hehe";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kishimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";

// echo $produk3->getLabel();

echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

$produk3 = new Produk ("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game :" . $produk2->getLabel();
echo "<br>";
var_dump($produk3);