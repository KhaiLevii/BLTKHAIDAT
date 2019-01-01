<?php
require("headeradmin.php");
?>
    <br>
    <br>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="3"></td>
                <td colspan="2"><a href="add_article.php" style="color:blue;">Thêm bài viết</a></td>
            </tr>
            <tr style="background:blue;color:white;">
                <th>STT</th>
                <th>Chuyên mục</th>
                <th>Tựa đề bài viết</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
              require("config.php");
              $stt=1;
              $result=mysqli_query($conn, "SELECT a.news_id, a.title, b.cate_title FROM news as a , category as b WHERE a.cate_id=b.cate_id");
              while($data=mysqli_fetch_assoc($result))
              {
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$data[cate_title]</td>";
                echo"<td>$data[title]</td>";
                echo"<td><a href='edit_article.php?id=$data[news_id]'>Edit</a></td>";
                echo"<td><a href='delete_article.php?id=$data[news_id]' onclick='return show_confirmarticle();' style='color:blue;'>Delete</a></td>";
                echo"</tr>";
                $stt++;
              }
            mysqli_close($conn);
            ?>
        </table>
    </div>
    <div id="bottom">Copyright &copy; by sharing game to you</div>


