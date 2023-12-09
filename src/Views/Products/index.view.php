
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
    


