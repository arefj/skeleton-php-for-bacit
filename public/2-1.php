<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oppgave 2-1</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<body>
    <?php $alder = 20;
    $navn = "Are"; ?>
    <table>
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <tr>
            <td><?php echo $navn ?></td>
            <td><?php echo $alder ?></td>
        </tr>
    </table>
    <ol>
        <li>Navn: <?php echo $navn ?></li>
        <li>Alder: <?php echo $alder ?></li>
    </ol>
    <ul>
        <li>Navn: <?php echo $navn ?></li>
        <li>Alder: <?php echo $alder ?></li>
    </ul>
    <p>Navn: <?php echo $navn ?>. Alder: <?php echo $alder ?>.</p>
</body>

</html>