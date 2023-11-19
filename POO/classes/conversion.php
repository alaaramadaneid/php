<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label>Choix du convertisseur :</label>
<select name="conversion">
    <option value="USD_€">USD à €</option>
    <option value="€_USD"> € à USD </option>
</select><br><br>
<label>Montant à convertir :</label>
        <input type="number" step="0.01" name="montant" required><br><br>
        <input type="submit" value="Convertir">
</form>
<!--php start-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conversion = $_POST['conversion'];
    $montant = $_POST['montant'];

    function convertirUSDenEUR($montant) {
        return $montant * 0.92;
    }

    function convertirEURenUSD($montant) {
        return $montant * 1.09;
    }

    if ($conversion == 'USD_€') {
        echo "<p>$montant USD = " . convertirUSDenEUR($montant) . " EUR</p>";
    } elseif ($conversion == '€_USD') {
        echo "<p>$montant EUR = " . convertirEURenUSD($montant) . " USD</p>";
    }
}
?>


</body>
</html>