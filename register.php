<?php 
require("header.php");
?>
<fieldset style="width:400px;height:120px;margin:140px auto 0px;">
	<form role="form" method="post" action="sign_up.php" autocomplete="on">
		<h2>Xin mời đăng kí</h2>
		<p>Bạn đã sẵn sàng là thành viên mới<a href='login.php'> (-Đăng nhập-)</a></p>
		<hr>
		<div class="form-group">
			<input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value=""
			 tabindex="1" required autofocus>
		</div>
		<div class="form-group">
			<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value=""
			 tabindex="2" required>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3"
					 required>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password"
					 tabindex="4" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12"><input type="submit" name="submit" value="Đăng kí" class="btn btn-primary btn-block btn-lg"
				 tabindex="4"></div>
		</div>
	</form>
	<hr>
	<div>
		<div class="row">
			<div class="col-md-12">

				<address>
					<strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây Sơn<br /> Quận Đống Đa, Thành
					phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
				</address>
			</div>
		</div>
	</div>
</fieldset>
</body>

</html>