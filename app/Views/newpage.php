<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="newpage.php" method="post"> <!-- Change action to add.php -->
        <label>UPC</label>
        <input type="text" name="UPC" value="">
        <br>
        <label>Product_Name</label>
        <input type="text" name="ProductName" value="">
        <br>
        <label>Price</label>
        <input type="text" name="Price" value="">
        <br>
        <label>Quantity</label>
        <input type="text" name="Quantity" value="">
        <br>
        <label>Created_at</label>
        <input type="datetime-local" name="Create_at" value="">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
