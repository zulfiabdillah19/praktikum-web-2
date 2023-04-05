<?php
class Hero {
    // acces modifier pada oop ada 3: public, private, protected

    // attribut / properti
    public $nama;
    public $health;
    public $damage;
    public $level = 1;

    // constructor adalah method yang secara otomatis ketika objek dibuat
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan info dari hero
    public function getInfo()
    {
        echo "<br> Nama: " . $this->nama;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;

    }

    // method untuk nak 1 level
    public function levelup($number){
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);

    }
}

// membuat objek dari class Hero
$hero1 = new Hero("Alucard", 3200, 200);

$hero2 = new Hero("Nana", 520000000, 5000000);

$hero1->getInfo();

echo "<hr>";

$hero2->levelup(4);

$hero2->getInfo();