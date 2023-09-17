<!-- app/Views/product_list.php --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>UPC</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['UPC'] ?></td>
                    <td><?= $product['ProductName'] ?></td>
                    <td><?= $product['Price'] ?></td>
                    <td><?= $product['Quantity'] ?></td>
                    <td><?= $product['Create_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
 