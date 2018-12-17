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
                <th>Email</th>
                <th>Level</th>
                <th>Delete</th>
            </tr>
            <?php
            // mở kết nối csdl
            require("config.php");
            // thực hiện câu truy vấn
           $result =mysql_query("select  username,email,level from users");
           $data =mysql_fetch_assoc($result);      //$data=array("username"=>"...", "email"=>"..." , "level"=>"...");
              echo   "<tr>";
              echo  "<td>1</td>";
              echo  "<td>$data[username]</td>";
              echo  "<td>$data[email]</td>";
              echo  "<td>Admin</td>";
              echo   "<td><a href='#' style='color:blue;'>Delete</a></td>";
               echo "</tr>";
               // đóng kết nối 
               mysql_close($conn) ;
            ?>        
        </table>
    </div>
    <div id="bottom">Copyright &copy; by sharing game to you</div>



</body>

</html>