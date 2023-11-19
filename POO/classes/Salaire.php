<!DOCTYPE html>
<html>
<head>
    <title>Calculateur de Salaire Net</title>
</head>
<body>
    <h2>Calculateur de Salaire Net</h2>
    <form method="post" action="">
        <label>Montant du salaire brut mensuel :</label>
        <input type="number"  name="salaire_brut" required><br><br>
        
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salaire_brut = $_POST['salaire_brut'];

        function calculerSalaireNet($salaire_brut) {
            $charges = $salaire_brut * 0.25; 
            $salaire_net = $salaire_brut - $charges; 
            return $salaire_net;
        }

        $salaire_net = calculerSalaireNet($salaire_brut);
        echo "<p>Le salaire net pour un salaire brut de $salaire_brut est de : $salaire_net</p>";
    }
    ?>
</body>
</html>
