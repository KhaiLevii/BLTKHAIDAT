<?php
require("header.php");
?>
<br>
<br>
<br>
<!-- game list -->
<div class="row">
<?php
  
        $keyword=$_GET["keyword"];
        require("config.php");
        $result=mysqli_query($conn , "select index_id,title_game,imagegame from indexs where title_game like '%$keyword%'");
        if(mysqli_num_rows($result)==0)
            {
                echo "<p style='margin:20px 0 0 10px;text-align:center;'class='form-control mr-sm-2'> Không tìm thấy kết quả tìm kiếm nào</p>";
            }
        else
            {
                $number=mysqli_num_rows($result);
                echo "<p style='margin:20px 0 0 10px;text-align:center;'class='form-control mr-sm-2'>Tìm thấy $number  kết quả với từ khoá '$keyword'</p>";
            }
            
        while ($data=mysqli_fetch_assoc($result))
            {
               echo" <div class='row'>";
                echo "<div class='col-md-4'>";
                echo "<br/>";
                echo " <img alt='' src='$data[imagegame]' />";
                echo  "<a href='cod.php?idGame=$data[index_id]' >$data[title_game]</a>";
                echo "</div>";
                echo "</div>";
            }
        mysqli_close($conn);
    ?>
</div>
<br>
<br>
<br>
        <hr>
        <div>
            <div class="row">
                <div class="col-md-12">

                    <address>
                        <strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây Sơn<br />
                        Quận Đống Đa, Thành phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
                    </address>
                </div>
            </div>
        </div>
    </div>
