<?php
include 'connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Crud-App</title>
    <!-- Tailwind CSS via CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b5d6653424.js" crossorigin="anonymous"></script>
</head>

<body>



    <?php
    include 'Components/Navbar.php';
    include 'Components/Table.php';
    ?>
        


</body>

</html>