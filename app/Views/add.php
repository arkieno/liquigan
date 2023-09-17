<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProd</title>
    <a href="newpage.php">
    <a href="list.php">
</head>
<body>
        <?= anchor('/test', 'Add Now', 'class="btn btn-primary"') ?>


    <h1>Prod List</h1>
    <ul>
        <?php foreach ($data as $product): ?>
            <li><?= anchor("/product/detail/{$product['id']}",$product['ProductName']); ?></li>
        <?php endforeach; ?>

    
</body>
</html>
