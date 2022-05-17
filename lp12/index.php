<?php
include "Kendaraan.php";

$kendaraan[] = new Kendaraan("Toyota Yaris", 4, 160000000, "Merah", "Premium", 2004);
$kendaraan[] = new Kendaraan("Honda Scoopy", 2, 13000000, "Putih", "Premium", 2011);
$kendaraan[] = new Kendaraan("Isuzu Panther", 4, 170000000, "Hitam", "Solar", 1998);

$kendaraan[] = new Kendaraan();
$kendaraan[3]->setMerek("Yamaha Mio");
$kendaraan[3]->setJmlRoda(2);
$kendaraan[3]->setBhnBakar("Premium");
$kendaraan[3]->setHarga(15000000);
$kendaraan[3]->setWarna("Biru");
$kendaraan[3]->setThnBuat(2009);

foreach ($kendaraan as $item) {
    echo "Kendaraan " . $item->getMerek() . ", memiliki " . $item->getJmlRoda() . " roda, berbahan bakar " . $item->getBhnBakar() . " dan mempunyai harga Rp. " . $item->getHarga() . " yang termasuk ke dalam kategori kendaraan dengan harga " . $item->statusHarga() . "<br>";
}
