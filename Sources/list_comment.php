<?php
require("headeradmin.php");
?>
    <br>
    <br>
    <div id="wrapper">
        <table>
            <tr style="background:blue;color:white;">
                <th>STT</th>
                <th>Username</th>
                <th>Messeage</th>
                <th style="width:50px;">Link</th>
                <th style="width:80px;">Kiểm duyệt</th>
                <th style="width:80px;">Delete</th>
            </tr>
            <?php
        require("config.php");
        $stt = 1;
        $result = mysqli_query($conn,"SELECT `cm_id`,`name`,`message`,`cm_check`,`news_id` from `comment` order by `cm_id` DESC");
        while  ($data = mysqli_fetch_assoc($result))
        {
           echo "<tr >";
            echo    "<td>$stt</td>";
            echo    "<td>$data[name]</td>";
            echo    "<td>$data[message]</td>";
            echo    "<td><a href='cod.php?idGame=$data[news_id]' target='_blank style='color:blue;'>Xem</a></td>";
            if($data["cm_check"]=='N')
            {
            echo    "<td><a href='edit_cm.php?id=$data[cm_id]' style='color:blue;' >Chưa duyệt</a></td>";
            }
            else
            {
            echo    "<td><a href='edit_cm.php?id=$data[cm_id]' style='color:blue;' >Đã duyệt</a></td>";
            }
            echo    "<td><a href='delete_cm.php?id=$data[cm_id]' onclick='return show_confirmcomment()'; style='color:blue;'>Delete</a></td>";
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