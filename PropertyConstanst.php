<?php
class produk{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;
    
    public const PAJAK = 0.11;
}

$produk = new produk ()
$produk -> kode; = "P0001"
$produk -> nama; = "Laptop"
$produk -> harga; = 1000000
$produk -> stock = 5;

$pajak = produk::PAJAK * 100
$jumlahpajak = $produk->harga * produk::PAJAK;

$total = $produk->harga + $jumlahpajak;

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>" ;

echo "Stock: ". $produuk->stock;
echo <br/> ;

echo "Pajak: ". $pajak;
echo <br/> ;
echo <br/> ;
echo "Total harga setelah pajak: .Rp ". $total;