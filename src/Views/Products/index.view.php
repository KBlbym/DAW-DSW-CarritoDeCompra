<?php
    $totalItem =0 ;
    if(isset($_COOKIE['cart'])){
        $cart = json_decode($_COOKIE['cart'], true);
        foreach($cart as $item){
            $totalItem += $item['count'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocLista de Productosument</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/site.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="<?= URL_PATH ?>/home">Home</a></li>
            <li><a href="<?= URL_PATH ?>/products">Productos</a></li>
            <li><a href="<?= URL_PATH ?>/cart">🛒<sup id="count"><?=  $totalItem ?></sup></a></li>
        </ul>
    </nav>
    <h1>Lista de Productos</h1>
    <table border="1"  id="table">
        <thead>
            <tr>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/id">ID</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/name">Nombre</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/price">Precio</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/amount">Amount</a></th>
                <th scope="col">Añadir al carrito</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price'] . "€" ?></td>
                    <td><?php echo $product['amount']; ?></td>
                    <td>
                    <form action="<?= URL_PATH ?>/Cart/addToCart" method="post">
                        <input type="hidden" name="product" value="<?= htmlspecialchars(json_encode($product)) ?>">
                        <button type="submit">🛒 Agregar al Carrito</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="<?= URL_PATH ?>/Assets/js/site.js"></script>
</body>
</html>

