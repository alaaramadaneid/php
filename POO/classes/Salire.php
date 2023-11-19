<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Entrez votre salaire brut</h1>
        <input type="number" name="Salaire">
        <input type="submit" value="Calculer" name="submit"><br>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $salaire_brut = $_POST['Salaire']; 

        function Calculateur($salaire_brut){
            $charges = $salaire_brut * 0.25;
            $salaire_net = $salaire_brut - $charges;
            return $salaire_net;
        }
        $salaire_net = Calculateur($salaire_brut);
        echo "<p>Votre salaire  netest $salaire_net </p>";
    }
    ?>
</body>
</html>
