<?php
$totalItem = 0;
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
    foreach ($cart as $item) {
        $totalItem += $item['count'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/site.css">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="<?= URL_PATH ?>/home">Home</a></li>
            <li><a href="<?= URL_PATH ?>/products">Productos</a></li>
            <li><a href="<?= URL_PATH ?>/cart">🛒<sup id="count"><?= $totalItem ?></sup></a></li>
        </ul>
    </nav>
    <main>
        <?php echo $renderBody; ?>
    </main>
    <script src="<?= URL_PATH ?>/Assets/js/site.js"></script>
</body>

</html>