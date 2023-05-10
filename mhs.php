<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASS PHP</title>
</head>
<body>
    <center><h1>TABEL CLASS PRODUK MUSIK</h1></center>
<?php
class Produk {
    public $nama;
    public $price;
    public $discount1 = 5;
    public $discount2 = 0;
    public $harga1 = 10;
    public $harga2 = 15;

    public function __construct($nama, $price) {
        $this->nama = $nama;
        $this->price = $price;
    }

    public function getHarga1() {
      return $this->price + ($this->price * $this->harga1 / 100);
    }

    public function getHarga2() {
      return $this->price + ($this->price * $this->harga2 / 100);
    }

    public function getHargaSetelahDiskon1() {
        return $this->price - ($this->price * $this->discount1 / 100);
    }

    public function getHargaSetelahDiskon2() {
      return $this->price - ($this->price * $this->discount2 / 100);
  }
}

class CDmusic extends Produk {
    public $genre;
    public $artis;

    public function __construct($nama, $price, $genre, $artis) {
        parent::__construct($nama, $price);
        $this->genre = $genre;
        $this->artis = $artis;
    }

    public function getInfoProduk1() {
        $hargaSetelahDiskon = $this->getHargaSetelahDiskon1();
        $harga = $this->getHarga1();
        return "<tr><td style='border:1px solid black;'>CD Music: $this->nama</td><td style='border:1px solid black;'>Rp. $this->price,-</td><td style='border:1px solid black;'>$this->discount1%</td><td style='border:1px solid black;'>Rp. $hargaSetelahDiskon,-</td><td style='border:1px solid black;'>$this->genre</td><td style='border:1px solid black;'>$this->artis</td></tr>";
    }
}

class CDrak extends Produk {
    public $kapasitas;
    public $model;

    public function __construct($nama, $price, $kapasitas, $model) {
        parent::__construct($nama, $price);
        $this->kapasitas = $kapasitas;
        $this->model = $model;
    }

    public function getInfoProduk2() {
        $hargaSetelahDiskon = $this->getHargaSetelahDiskon2();
        $harga = $this->getHarga2();
        return "<tr><td style='border:1px solid black;'>Nama CD: $this->nama</td><td style='border:1px solid black;'>Rp. $this->price,-</td><td style='border:1px solid black;'>$this->discount2%</td><td style='border:1px solid black;'>Rp. $hargaSetelahDiskon,-</td><td style='border:1px solid black;'>$this->kapasitas GB</td><td style='border:1px solid black;'>$this->model</td></tr>";
    }
}

// Data produk
$produk1 = new CDmusic("Apricot", 500000, "Pop Indie", "Rex Orange County");
$produk2 = new CDmusic("Solipsism", 250000, "Indie", "Pamungkas");
$produk3 = new CDrak("Rak 1", 50000, 64, "Model 1");
$produk4 = new CDrak("Rak 2", 75000, 128, "Model 2");

echo"<br>";
echo"<center>";
echo "<table style='border:1px solid black;'>";
echo "<tr><th style='background-color:grey;'>Nama Produk</th><th style='background-color:grey;'>Harga</th><th style='background-color:grey;'>Diskon</th><th style='background-color:grey;'>Harga Setelah Diskon</th><th style='background-color:grey;'>Genre & Kapasitas</th><th style='background-color:grey;'>Artis & Model</th></tr>";
echo $produk1->getInfoProduk1();
echo $produk2->getInfoProduk1();
echo $produk3->getInfoProduk2();
echo $produk4->getInfoProduk2();
echo "</table>";
?>
</body>
</html>