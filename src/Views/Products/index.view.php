
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocLista de Productosument</title>
</head>
<body id="table">
    <h1>Lista de Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/id">ID</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/name">Nombre</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/price">Precio</a></th>
                <th scope="col"><a href="<?= URL_PATH ?>/products/orderby/amount">Amount</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['price'] . "€" ?></td>
                    <td><?php echo $product['amount']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="<?= URL_PATH ?>/Assets/js/site.js"></script>
</body>
</html>

