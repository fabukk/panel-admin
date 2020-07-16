<?php
include "polacz.php";
$nr = wczytaj("nr");
$marka = wczytaj("marka");
$model = wczytaj("model");
$kolor = wczytaj("kolor");
$rocznik = wczytaj("rocznik");
$cena = wczytaj("cena");
$wyposazenie = wczytaj("wyposazenie");

$sql = $baza->prepare("UPDATE samochody SET marka=?, model=?, kolor=?, rocznik=?, cena=?, wyposazenie=? WHERE numer_nadwozia=?;");
if ($sql)
{
    $sql->bind_param("sssidsi",  $marka, $model, $kolor, $rocznik, $cena, $wyposazenie, $nr);
    $sql->execute();
    $sql->close();
}
else die("Błąd SQL: ". $baza->error);
$baza->close();
header ("Location: http://ti.fulara.com/~adam/paneladmina/");
?>