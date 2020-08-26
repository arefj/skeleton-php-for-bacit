<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oppgave 2-3</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<body>
    <?php
    $s = 4400;
    $h = intdiv($s, 60 * 60);
    $sRest = $s % (60 * 60);
    $m = intdiv($sRest, 60);
    $sRest = $sRest % 60;
    ?>
    <p>
        <?php
        echo $s . " sekunder utgjør: " . $h . " timer, " . 
        $m . " minuter og " . $sRest . " sekunder.";
        ?>
    </p>

</body>

</html>