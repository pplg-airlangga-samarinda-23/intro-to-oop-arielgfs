<?php
class hero {
    public $hp;
    public $mana;
    public $role;
    public function move() {
        echo "bergerak selengkah ke depan";
    }
    public function getMana (){
        return $this->mana; 
    }
    public function skill1(){
        echo "Menggunkan skill 1";
        $this->mana -= 10;
    }
}

$adam = new hero();
$adam -> hp = 200;
$adam -> mana = 100;
$adam -> role = "fighter";


echo "HP Adam = ".$adam->hp."<br>"; 
echo "Mana Adam = ".$adam->mana."<br>";
echo $adam->move()."<br>";
echo $adam->getMana()."<br>";
$adam->skill1()."<br>";
echo "mana: ".$adam->getMana()."<br>";