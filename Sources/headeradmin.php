<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome admin</title>
    <link rel="stylesheet" href="style.css">
    <script language="javascript">
    function show_confirm()
    {
        if(confirm("bạn có muốn xoá tài khoản này không?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    </script>
     <script language="javascript">
    function show_confirmcategory()
    {
        if(confirm("bạn có muốn xoá danh mục này không?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    </script>
    <script language="javascript">
    function show_confirmindex()
    {
        if(confirm("bạn có muốn xoá game này không?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    </script>
    

</head>

<body>
    <div id="top">
        <h3 style="color:white;">Chào mừng ADMIN. <a href="index.php" style="color:white;">(Đăng Xuất)</a></h3>
    </div>
    <div id="menu">
        <ul>
            <li><a href="list_user.php">Quản lí thành viên</a></li>
            <li><a href="list_index.php">Chỉnh sửa trang chủ</a></li>
            <li><a href="list_category.php">Quản lí chuyên mục</a></li>
            <li><a href="list_article.php">Quản lí nội dung</a></li>
            <li><a href="list_comment.php">Quản lí bình luận</a></li>
        </ul>
    </div>
    </body>