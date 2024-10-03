<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
    public $panjang;
    public $lebar;

    // deklarasikan metode konstruktor
    public function __construct($panjang, $lebar)
    {
        $this->panjang=$panjang;
        $this->lebar=$lebar;
    }

    // deklarasikan metode mutator dan asesor

    public function getPanjang()
    {
        return $this->$panjang;
    }

    public function getLebar()
    {
        return $this->$lebar;
    }

    public function __setPanjang($panjang)
    {
        $this->panjang=$panjang;
    }

    public function __setLebar($lebar)
    {
        $this->lebar=$lebar;
    }

    public function hitungLuas()
    {
        return $total=$this->panjang*$this->lebar;
        $total;
    }

    public function hitungKeliling()
    {
        return $total=($this->panjang+$this->lebar)*2;
        $total;
    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";
