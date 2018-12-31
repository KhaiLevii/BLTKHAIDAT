<?php
require("headeradmin.php");
?>
    <br>
    <br>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="2"><a href="add_index.php" style="color:blue;">Thêm Game</a></td>
                <td colspan="2"><a href="add_imageslide.php" style="color:blue;">Thêm Image Trang Chủ</a></td>
            </tr>
            <tr style="background:blue;color:white;">
                <th>STT</th>
                <th>Tên Game</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            require("config.php");
            $stt=1;
            $result=mysqli_query($conn , "select index_id,title_game from indexs");
            while ($data=mysqli_fetch_assoc($result))
            {
            echo "<tr>";
                echo "<td>$stt</td>";
                echo "<td>$data[title_game]</td>";
                echo "<td><a href='edit_index.php? id=$data[index_id]'  style='color:blue;'>Edit</a></td>";   
                echo "<td><a href='delete_index.php?id=$data[index_id]' onclick='return show_confirmindex();' style='color:blue;'>Delete</a></td>";
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