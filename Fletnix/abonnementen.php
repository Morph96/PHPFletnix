<?php

require 'Nav.php';
require 'abonnementenPrijzen.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
</head>

<body>

<div class="text-container">
    <div class="text">
        <div><p>Leuk dat je bij ons wilt inschrijven. Geef ons hieronder
                je details en je kunt beginnen met het kijken van de leukste series en films</p></div>
    </div>
</div>

<div class="registratieForm">
        <form method="get" action="registratie.php">
            <div class="left">
            <label for="naam">Naam: </label>
            <input type="text" name="naam" id="naam" required><br>
            <label for="achternaam">Achternaam: </label>
            <input type="text" name="achternaam" id="achternaam" required><br>
            <label for="geslacht">geslacht: </label>
            <select name="geslacht" id="geslacht" required>
                <option value="F">Vrouw</option>
                <option value="M">Man</option>
            </select>
            <label for="land">Land: </label>
            <select name="land" id="land" required>
                <option value="">....</option>
                <?= alleLanden() ?>
            </select><br>
            <label for="geboortejaar">Geboortejaar:(BV YYYY-MM-DD)</label>
            <input type="text" name="geboortejaar" id="geboortejaar" required>
            <label for="rekeningnummer">Rekeningnummer: </label>
            <input type="text" name="rekeningnummer" id="rekeningnummer" required>
            </div>
            <div class="left">
            <label for="emailaddress">Emailaddress: </label>
            <input type="text" name="emailaddress" id="emailaddress" required><br>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required><br>
            <label for="wachtwoord">Wachtwoord: </label>
            <input type="password" name="wachtwoord" id="wachtwoord" required><br>
            <label for="wachtwoord2">Wachtwoord Check: </label>
            <input type="password" name="wachtwoord2" id="wachtwoord2" required><br>
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
    </div>
    <button type="submit">Verzenden</button>
</div>


<?php require '../Footer/footer.php'; ?>
</body>
</html>