<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oppgave 2-4</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<body>
    <?php
    $medlem1 = 0001;
    $medlem2 = 0002;
    ?>
    <p>
        <?php
        if($medlem1 == $medlem2) {
            echo "Medlemsnumrene er like";
        } else {
            echo "Medlemsnumrene er ikke like";
        }
        ?>
    </p>

</body>

</html>