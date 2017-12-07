<?php template('header.php'); ?>
<!-- Latest compiled and minified CSS & JS -->


<!-- Page Content -->
<div class="container">
	<!-- slider -->
	<div class="row carousel-holder">

		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading text-danger">Đăng ký tài khoản
					<br><p class="text-danger"><?php echo isset($error) ? $error: ''; ?></p>

				</div>
				<div class="panel-body">
					<form action="signup" method="post" enctype="multipart/form-data" id="signupForm">
						<div>
							<label>Tên đăng nhập</label>
							<input class="form-control" name="username" minlength="5" required >
						</div>
						<br>
						<div>
							<label>Email</label>
							<input type="email" class="form-control" name="email" required >
						</div>
						<br>	
						<div>
							<label>Nhập mật khẩu</label>
							<input id="password" class="form-control" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mật khẩu phải chứa ít nhất 6 ký tự' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
						</div>
						<br>
						<div>
							<label>Nhập lại mật khẩu</label>
							<input id="password_two" name="repassword" class="form-control" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Hai mật khẩu không trùng nhau' : '');" required>
						</div>
						<br>
							<input type="submit" name="btn" class="btn btn-success" value="Đăng Ký">

						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<!-- end slide -->
	</div>
	<!-- end Page Content -->
	</script>

	<div style="height: 120px"></div>
	<?php template('footer.php'); ?>
