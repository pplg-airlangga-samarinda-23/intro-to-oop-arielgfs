<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $No_Polisi;
    public $Merek;
    public $Type;
    public $Tahun;
    public $Pembuatan;
    public $No_Rangka;
    public $No_Mesin;
    public $Bahan_Bakar;

    // contoh metode melaju()
    public function melaju() {
        echo "Mobil sedang melaju.";
    }

    public function belok() {
        echo "Mobil sedang belok.";
    }
    
    public function berhenti() {
        echo "Mobil sedang berhenti.";
    }

    public function mundur() {
        echo "Mobil sedang mundur.";
    }


}

// buat sebuah objek mobil dan lengkapi atributnya
$mobil = new mobil();
$mobil -> No_Polisi = "kt 200 bv";
$mobil -> Merek = "Toyota";
$mobil -> Type = "Sedan";
$mobil -> Tahun = 2018;
$mobil -> Pembuatan = "Jepang";
$mobil -> No_Rangka = 35;
$mobil -> No_Mesin = 68;
$mobil -> Bahan_Bakar = "Bensin";

// panggil keempat metode yang terdapat pada kelas Mobil

echo $mobil->melaju()."<br>"; 
echo $mobil->belok()."<br>"; 
echo $mobil->berhenti()."<br>"; 
echo $mobil->mundur()."<br>"; 