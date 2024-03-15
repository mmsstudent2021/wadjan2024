<?php

// connect mysql

$conn = mysqli_connect("localhost", "hhz", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Edit Product</h3>

    <?php

    $id = $_GET["row_id"];

    $sql = "SELECT * FROM products WHERE id=$id";
    // echo $sql;

    $query = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($query);

    // print_r($row);



    ?>

    <form action="./update.php" method="post">
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="hidden" name="row_id" value="<?= $row['id'] ?>">
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="text" name="name" value="<?= $row['name'] ?>" required>
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="text" name="price" value="<?= $row['price'] ?>" required>
        <input class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" type="number" name="stock" value="<?= $row['stock'] ?>" required>
        <button>Add</button>
    </form>
</body>

</html>