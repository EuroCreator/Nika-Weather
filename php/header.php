<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/SASS/styleGeneral.css">
<?php if ($_SESSION["DL-USER"] == "light") : ?>
    <link rel="icon" type="image/png" href="../resources/icons/favicon(LIGHT).png">
<?php endif; ?>
<?php if ($_SESSION["DL-USER"] == "dark") : ?>
    <link rel="icon" type="image/png" href="../resources/icons/favicon(DARK).png">
<?php endif; ?>

<!-- Intégration de la police "Epilogue" -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">