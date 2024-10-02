<?php
class Waktu
{
    // deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan metode sesuai yang diminta buku
    public function __construct($jam, $menit, $detik)
    {
        $this->jam=$jam;
        $this->menit=$menit;
        $this->detik=$detik;
    }
    public function getJam()
    {
        return $this->jam;
    }
    public function getMenit()
    {
        return $this->menit;
    }
    public function getDetik()
    {
        return $this->detik;
    }

}

$contoh = new Waktu(15, 34, 50);
// $contoh -> jam = date('H');
// $contoh -> menit = date('i');
// $contoh -> detik = date('s');
echo "Sekarang pukul"." ".$contoh->jam.":".$contoh->menit.":".$contoh->detik."<br>"; //output: Sekarang pukul 15:34:50