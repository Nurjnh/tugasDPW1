<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "gukk gukk gukk gukk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "Miiiiipp";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakkkkkk kwaakkkkkkk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Kiko = new Kucing;
$Kiko->jumlah_kaki = 4;
echo "Kiko adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Kiko->jumlah_kaki."<br>";
echo "Bisa Terbang : " .$Kiko->bisa_terbang()."<br>";
echo "Bersuara : " .$Kiko->bersuara()."<br>";

echo "<hr>";

$Fraz = new Anjing;
$Fraz->jumlah_kaki = 4;
echo "Fraz Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : " .$Fraz->jumlah_kaki."<br>";
echo "Bisa Terbang : " .$Fraz->bisa_terbang()."<br>";
echo "Bersuara : " .$Fraz->bersuara()."<br>";

echo "<hr>";

$Nancy = new Elang;
$Nancy->jumlah_kaki = 2;
echo "Nancy Adalah Elang <br>";
echo "Punya Kaki Sebanyak : " .$Nancy->jumlah_kaki."<br>";
echo "Bisa Terbang : " .$Nancy->bisa_terbang()."<br>";
echo "Bersuara : " .$Nancy->bersuara()."<br>";

echo "<hr>";

$Merry = new Angsa;
$Merry->jumlah_kaki = 2;
echo "Merry Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : " .$Merry->jumlah_kaki."<br>";
echo "Bisa Terbang : " .$Merry->bisa_terbang()."<br>";
echo "Bersuara : " .$Merry->bersuara()."<br>";

echo "<hr>";

?>