<?php 
    $subTotal = 0;
    $cart = null;
    if(isset($_COOKIE['cart'])){
        $cart = json_decode($_COOKIE['cart'], true);
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
    <h1>Carrito de compra</h1>
    <?php if($cart) : ?>
    <form action="<?= URL_PATH ?>/Cart/clearCart" method="post">
        <button type="submit">Vaciar el carrito</button>
    </form>
    <table border="1"  id="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $item): ?>
                <tr>
                    <td><?php echo $item['product']['id']; ?></td>
                    <td><?php echo $item['product']['name']; ?></td>
                    <td><?php echo $item['product']['price'] . "€" ?></td>
                    <td>
                    <form action="<?= URL_PATH ?>/Cart/update" method="POST">
                        <input type="hidden" name="productId" value="<?= $item['product']['id']?>">
                        <button type="submit" name="accion" value="-"> - </button>
                        <?php echo $item['count']; ?>
                        <button type="submit" name="accion" value="+"> + </button>
                    </form>
                    </td>
                    <td>
                    <?php 
                        $subTotal += ($item['product']['price'] * $item['count']);
                        echo  ($item['product']['price'] * $item['count']) . "€"?> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">SubTotal</th>
                
                <th><?php echo $subTotal . "€"?> </th>
            </tr>
        </tfoot>
    </table>
    <?php else: ?>
        <div class="alert">No hay productos en el carrito de compra <a href="<?= URL_PATH ?>/products">ir a página de compra</a></div>
    <?php endif; ?>
</body>
</html>