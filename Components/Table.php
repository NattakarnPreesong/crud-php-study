<a href="created.php">Create</a>

<table border="1">
    <thead >
        <tr >
            <th scope="col">ลำดับ</th>
            <th scope="col">รูปสินค้า</th>
            <th scope="col">ชื่อสินค้า</th>
            <th scope="col">ประเภทสินค้า</th>
            <th scope="col">รายละเอียดสินค้า</th>
            <th scope="col">ราคาสินค้า</th>
            <th scope="col">จำนวนสินค้า</th>
            <th scope="col">จัดการ</th>
        </tr>
        
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                        <thead>
                        <tr>
                        <td scope='col'>" . $row["Product_ID"] . "</td>
                        <td scope='col'><img src=". $row["Product_Picture"] ." height='full' width='100px'></td>
                        <td scope='col'>" . $row["Product_Name"] . "</td>
                        <td scope='col'>" . $row["Product_Category"] . "</td>
                        <td scope='col'>" . $row["Product_Description"] . "</td>
                        <td scope='col'>" . $row["Product_Price"] . "</td>
                        <td scope='col'>" . $row["Quantity_Stock"] . "</td>
                        <td scope='col'>
                            <a href='edit.php?id=" . $row["Product_ID"] . "'>Edit</a>
                            <a href='delete.php?id=" . $row["Product_ID"] . "'>Delete</a>
                        </td>
                    </tr>
                    </thead>";
            }
        } else {
            echo "
            <tr>
                <td style='text-align: center;' colspan='100%'>No users found</td>
            </tr>";
        }
        $conn->close();
        ?>
    </thead>
</table>