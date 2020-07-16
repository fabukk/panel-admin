<html>
<head>
    <meta charset="utf-8">
    <title>Dodaj nowy obiekt</title>
</head>
<body>
<h1>Dodawanie do bazy</h1>
<form method="get" action="insert.php">
    <table border="0">
        <tr><td>Numer silnika</td><td><input type="number" name="nr" maxlen="20" size="20"></td></tr>
        <tr><td>Marka</td><td><input name="marka"></td></tr>
        <tr><td>Model</td><td><input name="model"></td></tr>
        <tr><td>Kolor</td><td><input type="color" name="kolor"></td></tr>
        <tr><td>Rocznik</td><td><input type="number" min="1990" max="2020" name="rocznik"></td></tr>
        <tr><td>Cena</td><td><input type="number" step="0.01" name="cena"></td></tr>
        <tr><td>Wyposażenie</td><td><input name="wyposazenie" maxlen="20" size="20"></td></tr>
        <tr><td colspan="2"><input type="submit" value="wstaw"></td></tr>
    </table>
</form>
</body>
</html>