<?php 
require("header.php");
?>
<br>
<br>
<div>
	<fieldset style="width:400px;height:120px;margin:140px auto 0px;">
		<form role="form" method="post" action="login.php" autocomplete="on">
			<h2 style="text-align:center;">Vui lòng đăng nhập</h2>
			<p><a href="index.php">Trở lại trang chủ</a></p>
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

			<hr>
			<div class="row">
				<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary btn-block btn-lg"
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