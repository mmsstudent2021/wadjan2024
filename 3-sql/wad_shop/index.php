<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL & PHP Shop</title>
</head>

<body>

    <h3>Create Product</h3>

    <form action="./save.php" method="post">
        <input type="text" name="name" required>
        <input type="text" name="price" required>
        <input type="number" name="stock" required>
        <button>Add</button>
    </form>

</body>

</html>