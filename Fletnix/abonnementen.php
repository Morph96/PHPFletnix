<?php

require 'Nav.php';
require 'aboonnementenPrijzen.php';
require '../Footer/footer.php';

function alleLanden() {
    $hostname = "localhost";
    $dbname = "Fletnix_Docent";
    $username = "sa";
    $pw = "M0rt3n1996!";
    try {
        $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0",
            "$username", "$pw");

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Er ging iets mis met de database. <br>";
        echo "De melding is {$e->getMessage()} <br><br>";
    }
    $data = $dbh->query("SELECT * FROM country");

    $landen = "";

    while($row = $data->fetch(PDO::FETCH_BOTH)) {
        $landen .= "<option value='{$row['country_name']}'>{$row['country_name']}</option>";
    }
    return $landen;
}

function alleContracten() {
    $hostname = "localhost";
    $dbname = "Fletnix_Docent";
    $username = "sa";
    $pw = "M0rt3n1996!";

    try {
        $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0",
            "$username", "$pw");

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Er ging iets mis met de database. <br>";
        echo "De melding is {$e->getMessage()} <br><br>";
    }
    $data = $dbh->query("SELECT * FROM Contract");

    $contract = "";

    while($row = $data->fetch(PDO::FETCH_BOTH)) {
        $contract .= "<option value='{$row['contract_type']}'>{$row['contract_type']}</option>";
    }

    return $contract;
}

function alleBetalingsMethoden() {
    $hostname = "localhost";
    $dbname = "Fletnix_Docent";
    $username = "sa";
    $pw = "M0rt3n1996!";

    try {
        $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0",
            "$username", "$pw");

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Er ging iets mis met de database. <br>";
        echo "De melding is {$e->getMessage()} <br><br>";
    }
    $data = $dbh->query("SELECT * FROM Payment");

    $betaalMehtodes = "";

    while($row = $data->fetch(PDO::FETCH_BOTH)) {
        $betaalMehtodes .= "<option value='{$row['payment_method']}'>{$row['payment_method']}</option>";
    }
    return $betaalMehtodes;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FletNix: Abonnementen</title>
    <link type="text/css" rel="stylesheet" href="CSS/CSSglobal.css">
</head>

<body>
<div class="text-container">
    <div class="text">
        <div><p>Leuk dat je bij ons wilt inschrijven. Geef ons hieronder
            je details en je kunt beginnen met het kijken van de leukste series en films</p></div>
    </div>
</div>


<form method="get" action="registratie.php">
    <label for="naam">Naam: </label>
    <input type="text" name="naam" id="naam" required><br>
    <label for="achternaam">Achternaam: </label>
    <input type="text" name="achternaam" id="achternaam" required><br>
    <label for="geslacht">geschlacht: </label>
    <select name="geslacht" id="geslacht" required>
        <option value="F">Vrouw</option>
        <option value="M">Man</option>
    </select>
    <label for="land">Land: </label>
    <select name="land" id="land" required>
        <option value="">....</option>
        <?= alleLanden()?>
    </select><br>
    <label for="geboortejaar">Geboortejaar:(BV YYYY-MM-DD)</label>
    <input type="text" name="geboortejaar" id="geboortejaar" required>
    <label for="rekeningnummer">Rekeningnummer: </label>
    <input type="text" name="rekeningnummer" id="rekeningnummer" required>
    <label for="emailaddress">Emailaddress: </label>
    <input type="text" name="emailaddress" id="emailaddress" required><br>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username" required><br>
    <label for="wachtwoord">Wachtwoord: </label>
    <input type="text" name="wachtwoord" id="wachtwoord" required><br>
    <label for="wachtwoord2">Wachtwoord Check: </label>
    <input type="text" name="wachtwoord2" id="wachtwoord2" required><br>
    <label for="fletnixtype">FletNix type: </label>
    <select name="fletnixtype" id="fletnixtype" required>
        <option value="">....</option>
        <?= alleContracten() ?>
    </select><br>
    <label for="betalingsmethode">Betalingsmethode</label>
    <select name="betalingsmethode" id="betalingsmethode" required>
        <option value="">....</option>
        <?= alleBetalingsMethoden() ?>
    </select><br>
    <button type="submit">Verzenden</button>
</form>

</body>
</html>