<?php
include "polacz.php";
$nr = wczytaj("nr"); //wczytanie z tablicy _GET ze sprawdzeniem czy niepusty
if ($sql = $baza->prepare( "DELETE FROM samochody WHERE numer_nadwozia = ?;" ))
{
    $sql->bind_param( "i", $nr);
    $sql->execute();
    $sql->close();
}
$baza->close();
header ("Location: http://ti.fulara.com/~adam/paneladmina" );
?>