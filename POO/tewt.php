<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Convertisseur</h1>
        <input type="number" name="montant">
        <select name="convertisseur">
            <option value="USD_€">USD à €</option>
            <option value="€_USD">€ à USD</option>
        </select>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $conversion = $_POST['convertisseur'];
        $montant = $_POST['montant'];
    
        function convertirUSDenEUR($montant) {
            return $montant * 0.85;
        }
    
        function convertirEURenUSD($montant) {
            return $montant * 1.18;
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
