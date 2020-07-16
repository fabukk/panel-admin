<?php
include "polacz.php";
$nr = wczytaj("nr");
if ( $sql = $baza->prepare( "SELECT * FROM samochody WHERE numer_nadwozia = ?;"))
{
    $sql->bind_param("i" ,$nr);
    $sql->execute();
    $sql->bind_result($numer_nadwozia, $model, $marka, $rocznik, $cena, $kolor, $wyposazenie);
    if (!$sql->fetch())  die("Blad!!! Brak rekordu do edycji w bazie!!! Liczba rekodow:".$sql->num_rows);


    /////////////////////// HTML w PHP
    echo '
 <html>
  <head>
   <meta charset="utf-8">
   <title>Edycja obiektu</title>
  </head>
  <body>
   <h1>Edycja rekordu z bazy</h1>
   <form method="get" action="update.php">
    <table border="0">
      <tr><td>Numer silnika</td><td><input name="nr" value="'.$nr.'" disabled>
              <input type="hidden" name="nr" value="'.$nr.'">  </td></tr>
      <tr><td>Marka</td><td><input name="marka" value="'.$marka.'" maxlen="20" size="20"></td></tr>
      <tr><td>Model</td><td><input name="model" value="'.$model.'" maxlen="20" size="20"></td></tr>
      <tr><td>Kolor</td><td><input type="color" name="kolor" value="'.$kolor.'"></td></tr>
      <tr><td>Rocznik</td><td><input type="number" name="rocznik" value="'.$rocznik.'" min="1990" max="2020"></td></tr>
      <tr><td>Cena</td><td><input type="number" step="0.01" min="100" max="1000000" name="cena" value="'.$cena.'"></td></tr>
      <tr><td>Wyposażenie</td><td><input name="wyposazenie" value="'.$wyposazenie.'" maxlen="20" size="20"></td></tr>
      <tr><td colspan="2"><input type="submit" value="zapisz zmiany"></td></tr>
    </table>
   </form>
  </body>
 </html>
 ';
    $sql->close();
}
$baza->close();
?>