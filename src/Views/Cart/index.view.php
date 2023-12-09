<?php 
    $subTotal = 0;
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
</head>
<body>
    <h1>Carrito de compra</h1>
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
                    <td><?php echo $item['count']; ?></td>
                    <td><?php 
                     $subTotal += ($item['product']['price'] * $item['count']);
                    echo  ($item['product']['price'] * $item['count']) . "€"?> </td>
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
</body>
</html>