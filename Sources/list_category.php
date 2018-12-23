<?php
require("headeradmin.php");
?>
    <br>
    <br>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="2"></td>
                <td colspan="2"><a href="add_category.php" style="color:blue;">Thêm chuyên mục</a></td>
            </tr>
            <tr style="background:blue;color:white;">
                <th>STT</th>
                <th>Chuyên mục</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            require("config.php");
            $stt=1;
            $result=mysqli_query($conn , "select cate_id,cate_title from category");
            while ($data=mysqli_fetch_assoc($result))
            {
            echo "<tr>";
                echo "<td>$stt</td>";
                echo "<td>$data[cate_title]</td>";
                echo "<td><a href='edit_category.php? id=$data[cate_id]'  style='color:blue;'>Edit</a></td>";   
                echo "<td><a href='delete_category.php?id=$data[cate_id]' onclick='return show_confirmcategory();' style='color:blue;'>Delete</a></td>";
            echo "</tr>";
            $stt++;
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
    <div id="bottom">Copyright &copy; by sharing game to you</div>



</body>

</html>