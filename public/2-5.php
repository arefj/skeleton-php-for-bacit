<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oppgave 2-5</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<body>
    <?php

    $fornavn = "Jon";
    $etternavn = "Jonsen";
    $adresse = "eppleveien 2";
    $tlf = "68412157";
    $epost = "jon.jonsen@gmail.com";
    $dob = "02.09.1998";
    $kjønn = "mann";
    $interesser = "Trening,Gaming";
    $kursaktiviteter = "Bowling";
    $medlemSiden = "17.04.2019";
    $kontigentStatus = "Betalt";


    ?>
    <p>
        <table>
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Adresse</th>
                <th>Mobilnummer</th>
                <th>E-post</th>
                <th>Fødselsdato</th>
                <th>Kjønn</th>
                <th>Interesser</th>
                <th>Kursaktiviteter</th>
                <th>Medlem siden</th>
                <th>Kontigentstatus</th>
            </tr>
            <tr>
                <td><?php echo $fornavn ?></td>
                <td><?php echo $etternavn ?></td>
                <td><?php echo $adresse ?></td>
                <td><?php echo $tlf ?></td>
                <td><?php echo $epost ?></td>
                <td><?php echo $dob ?></td>
                <td><?php echo $kjønn ?></td>
                <td><?php echo $interesser ?></td>
                <td><?php echo $kursaktiviteter ?></td>
                <td><?php echo $medlemSiden ?></td>
                <td><?php echo $kontigentStatus ?></td>
            </tr>
        </table>
    </p>

</body>

</html>