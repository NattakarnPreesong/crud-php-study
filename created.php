<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $age = $_POST["age"];
    $age = $_POST["age"];
    $age = $_POST["age"];
    $age = $_POST["age"];

    $sql = "INSERT INTO products (Product_Name, Product_Picture, Product_Category, Product_Description, Product_Price, Quantity_Stock) VALUES ('$name', '$email', '$age')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add a Product</title>
</head>

<body>
    <h2>Add a new product</h2>
    <div  method="post">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            ชื่อสินค้า: <input type="text" name="name" required><br>
            รูปสินค้า: <input type="file" name="email" required><br>
            ประเภทสินค้า: <input type="text" name="age" required><br>
            รายละเอียดสินค้า: <input type="text" name="age" required><br>
            ราคาสินค้า: <input type="number" name="age" required><br>
            จำนวนสินค้า: <input type="number" name="age" required><br>
            <input type="submit" value="Create">
        </form>
        <a href="index.php">Back to list</a>
    </div>
</body>

</html>