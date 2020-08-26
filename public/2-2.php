<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oppgave 2-2</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<body>
    <?php
    $tall1 = 5;
    $tall2 = 7;
    $antallVerdier = 2;
    $sum = $tall1 + $tall2;
    $differanse = abs($tall1 - $tall2);
    $gjennomsnitt = $sum / $antallVerdier;
    ?>
    <p>
        <?php
        echo "Summen av " . $tall1 . " og " . $tall2 . " er " . $sum . ", " . 
        "differansen er " . $differanse . " og " . 
        "gjennomsnittet er " . $gjennomsnitt . ".";
        ?>
    </p>

</body>

</html>