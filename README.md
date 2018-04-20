# fontawesome-group
[![Build Status](https://travis-ci.org/locddspkt/fontawesome-group.svg?branch=master)](https://travis-ci.org/locddspkt/fontawesome-group)

Merge more than one icon in a group

We use this built-in feature of fontawesome https://fontawesome.com/how-to-use/svg-with-js#layering


**Example Scripts**
```php
<?php 

require_once ('path/to/fontawesome-group/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- load the javascript file of fontawesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
    <title>Icon list</title>
</head>
<body style="padding: 20px">
    <?= FontAwesomeGroupHelper\FaIcon::create('icons-fas_clock_plus') ?>
</body>
</html>
```

## License



This project is licensed under the MIT license.
