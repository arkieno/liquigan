<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProd</title>
</head>
<body>
    <h1>Product List</h1>
    <form action="/save" method="post">
        <label for="UPC">UPC</label>
        <input type="text" name="UPC" id="UPC" placeholder="Enter UPC" value="<?= $pro['UPC'] ?>">
        <label for="ProductName">Product Name</label>
        <input type="text" name="ProductName" id="ProductName" placeholder="Enter Product Name"  value="<?= $pro['ProductName'] ?>">
        <label for="Price">Price</label>
        <input type="text" name="Price" id="Price" placeholder="Enter Price" value="<?= $pro['Price'] ?>">
        <label for="Quantity">Quantity</label>
        <input type="text" name="Quantity" id="Quantity" placeholder="Enter Quantity" value="<?= $pro['Quantity'] ?>">
        <label for="Create_at">Create Date</label>
        <input type="datetime-local" name="Create_at" id="Create_at" value="<?= $pro['Create_at'] ?>">
        <input type="submit" value="Save">
    </form>

    <table border="1">
        <tr>
            <th>UPC</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $pr): ?>
            <tr>
                <td><?= $pr['UPC'] ?></td>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['Price'] ?></td>
                <td><?= $pr['Quantity'] ?></td>
                <td><?= $pr['Create_at'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a>|| <a href="/edit/<?= $pr['id'] ?>">edit</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
