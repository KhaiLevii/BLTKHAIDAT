<?php

session_start();
include("config.php");
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$sql = "SELECT * from users where username='$username'";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
	if ($result) {
		if (mysqli_num_rows($result) == 1)  {

			$data = mysqli_fetch_assoc($result);

			$level = $data["level"];

			if ($level == 2 &&(password_verify($password, $data["password"]))) {
				 header("location:headeradmin.php");
				 exit();
			} else if (password_verify($password, $data["password"])) {
				$_SESSION["username"] = $username;
				header("location:index.php");
				exit();
			}
			else {
				$error = "Tên đăng nhập hoặc mật khẩu không chính xác!";
			}
		} else {
			$error = "Tên đăng nhập hoặc mật khẩu không chính xác!";
		}
	}

}

require("header.php");
?>
<br>
<br>
<div>
	<fieldset style="width:400px;height:120px;margin:140px auto 0px;">
		<form role="form" method="post" action="login.php" autocomplete="on">
			<h2 style="text-align:center;">Vui lòng đăng nhập</h2>
			<p><a href="admin.php">Trở lại trang chủ</a></p>
			<hr>
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="UserName" value=""
				 tabindex="1" required>
			</div>

			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3"
				 required>
			</div>

			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9">
					<a href='reset.php'>Quên mật khẩu?</a>
				</div>
			</div>
			<div class="form-group">
			<?php
				if (isset($error)) {
					echo "<p class='bg-danger error'>$error</p>";
				}
			?>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-6 col-md-6"><input type="submit" name="login" value="Đăng nhập" class="btn btn-primary btn-block btn-lg"
					 tabindex="5"></div>
			</div>
			<hr>
			<div>
				<div class="row">
					<div class="col-md-12">

						<address>
							<strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây Sơn<br /> Quận Đống Đa,
							Thành phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
						</address>
					</div>
				</div>
			</div>

		</form>

	</fieldset>

</div>

</body>

</html>