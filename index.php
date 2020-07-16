<html>
<head>
    <meta charset="utf-8">
    <title>Panel admina</title>
</head>
<body>
<h1>Panel Administratora</h1>
<table border="1">
    <tr>
        <th>Numer nadwozia</th><th>Model</th><th>Marka</th><th>Rocznik</th><th>Cena</th><th>Kolor</th><th>Wyposażenie</th>
        <th>Edycja</th><th>Usuwanie</th>
    </tr>
    <?php
    include "polacz.php";
    if ($sql =  $baza->prepare("SELECT * FROM samochody ORDER BY marka, model"))
    {
        $sql->execute();
        $sql->bind_result($nr_nadwozia, $model, $marka, $rocznik, $cena, $kolor, $wyposazenie);
        while ($sql->fetch())
        {
            echo "<tr>
                        <td>$nr_nadwozia</td>
                        <td>$model</td>
                        <td>$marka</td>
                        <td>$rocznik</td>
                        <td>$cena</td>
                        <td bgcolor="$kolor">$kolor</td>
                        <td>$wyposazenie</td>
                        <td><a href=\"edycja.php?nr=$nr_nadwozia\">Edytuj</a></td>
                        <td><a href=\"usun.php?nr=$nr_nadwozia\" onclick=\"javascript:return confirm('Czy na pewno usunąć?'); \">Usuń</a></td>
                   </tr>";
        }
        $sql->close();
    }
    else die( "Błąd w zapytaniu SQL! Sprawdź kod SQL w PhpMyAdmin: ". $baza->error );

    $baza->close();
    ?>
</table>
<a href="dodaj.php">Dodawanie nowego</a>
</body>
</html>