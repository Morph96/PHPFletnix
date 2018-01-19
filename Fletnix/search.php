<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/16/2018
 * Time: 5:26 PM
 */

require 'PDOverbinding.php';
require 'Nav.php';

$search = $_GET['search'];

?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
</head>
<body>
<div class="center"><h1>Dit zijn uw zoek resultaten voor "<?= $search ?>":</h1></div>
    <div class="results">
        <?= zoekResultaat(); ?>
    </div>
</div>

<?php require '../Footer/footer.php'; ?>

</body>
</html>
