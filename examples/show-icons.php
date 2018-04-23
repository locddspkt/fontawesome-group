<?php
include_once __DIR__ . '/../src/autoload.php';

use FontAwesomeGroupHelper\FontAwesomeGroupHelper;
use FontAwesomeGroupHelper\Constants;
use FontAwesomeGroupHelper\FaIcon;

$isDesigning = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>    <title>Icon list</title>
</head>
<body style="padding: 20px">
    <?= FaIcon::create('icons-fas_user_plus_higher') ?>
    <?= FaIcon::create('icons-far_clock_plus') ?>
    <?= FaIcon::create('icons-far_fa_cog') ?>
</body>
</html>