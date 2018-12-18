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
            $stt  = 1;
           $result = mysqli_query($conn, "select  id,username,email,level from users");
           while($data = mysqli_fetch_assoc($result))      //$data=array("id"=>"...","username"=>"...", "email"=>"..." , "level"=>"...");
           {
              echo   "<tr>";
              echo  "<td>1</td>";
              echo  "<td>$data[username]</td>";
              echo  "<td>$data[email]</td>";
              if ($data['level']==1)
              {
              echo  "<td>Thành viên</td>";
              }
              else
              {
                  echo "<td>Admin</td>";
              }

              echo   "<td><a href='delete_user.php?id=$data[id]' onclick='return show_confirm();' style='color:blue;'>Delete</a></td>";
               echo "</tr>";
               $stt ++;
           }
               // đóng kết nối 
               mysqli_close($conn) ;
            ?>        
        </table>
    </div>
    <div id="bottom">Copyright &copy; by sharing game to you</div>



</body>

</html>