<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProd</title>
</head>
<body>
    <form action="/save" method="post">
            <label>UPC</label>
            <input type="text" name="UPC" placeholder="UPC">
            <br>
            <label>ProductName</label>
            <input type="text" name="ProductName" placeholder="ProductName">
            <br>
            <label>Price</label>
            <input type="text" name="Price" placeholder="Price">
            <br>
            <label>Quantity</label>
            <input type="text" name="Quantity" placeholder="Quantity">
            <br>
            <label>Create_at</label>
            <input type="datetime-local" name="Create_at" placeholder="Create_at">
            <br>
            <input type="submit" value="save">

</form>
        
    <h1>Prod List</h1>
    <table border = "1">
        <tr>
            <th>UPC</th>
            <th>ProductName</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Create_at</th>
            <th>action</th>

</tr>
<?php foreach ($products as $pr): ?>
    <tr>
        <td><?= $pr['UPC'] ?></td>
        <td><?= $pr['ProductName'] ?></td>
        <td><?= $pr['Price'] ?></td>
        <td><?= $pr['Quantity'] ?></td>
        <td><?= $pr['Create_at'] ?></td>
        <td><a href="/delete/<?= $pr['id'] ?>">delete</a> </td>
</tr>

    <?php endforeach; ?>
</table>

</body>
</html>
