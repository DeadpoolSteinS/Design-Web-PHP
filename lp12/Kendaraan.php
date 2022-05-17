<?php
class Kendaraan
{
    private $merek, $jmlRoda, $harga, $warna, $bhnBakar, $thnBuat;

    function __construct($merek = "", $jmlRoda = 0, $harga = 0, $warna = "", $bhnBakar = "", $thnBuat = 0)
    {
        $this->merek    = $merek;
        $this->jmlRoda  = $jmlRoda;
        $this->harga    = $harga;
        $this->warna    = $warna;
        $this->bhnBakar = $bhnBakar;
        $this->thnBuat  = $thnBuat;
    }


    // GET SET PROPERTY
    function getMerek()
    {
        return $this->merek;
    }

    function getJmlRoda()
    {
        return $this->jmlRoda;
    }

    function getHarga()
    {
        return $this->harga;
    }

    function getWarna()
    {
        return $this->warna;
    }

    function getBhnBakar()
    {
        return $this->bhnBakar;
    }

    function getThnBuat()
    {
        return $this->thnBuat;
    }

    function setMerek($merek)
    {
        $this->merek = $merek;
    }

    function setJmlRoda($jmlRoda)
    {
        $this->jmlRoda = $jmlRoda;
    }

    function setHarga($harga)
    {
        $this->harga = $harga;
    }

    function setWarna($warna)
    {
        $this->warna = $warna;
    }

    function setBhnBakar($bhnBakar)
    {
        $this->bhnBakar = $bhnBakar;
    }

    function setThnBuat($thnBuat)
    {
        $this->thnBuat = $thnBuat;
    }


    // METHOD NOT GET SET
    function dapatSubsidi()
    {
        if ($this->bhnBakar == "Premium" && $this->thnBuat < 2005) return true;
        else return false;
    }

    function hargaSecond()
    {
        if ($this->thnBuat > 2005) return ($this->harga * 4 / 5);
        else if ($this->thnBuat < 2000) return ($this->harga * 3 / 5);
        else return ($this->harga * 7 / 10);
    }

    function statusHarga()
    {
        if ($this->harga >= 500000000) return "Mahal";
        else return "Murah";
    }
}
