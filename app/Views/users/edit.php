<?php template('header.php'); ?>

<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Thông tin tài khoản</div>
				<div class="panel-body">
					<form action="/users/edit/<?=$user['id']?>" method="post" enctype="multipart/form-data">
						<div>
							<label>Họ tên</label>
							<input class="form-control" name="username"  value="<?=$user['username']?>" require minlength="5">
						</div>
						<br>
						<div>
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" value="<?=$user['email']?>">
						</div>
						<br>	
						<div>

							<label>Đổi mật khẩu</label>
							<input type="text" class="form-control" name="password" required value="<?=$user['password']?>">
						</div>
						<br>
						<div>

							<label>Role</label>
							<select class="form-control" name="role">
								<option value="0">Member</option>
								<option value="1">Admin</option>
							</select>
						</div>
						<br>

						<input type="submit" class="btn btn-success" value="Lưu chỉnh sửa" name="edit">

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



<div style="height: 120px"></div>
<?php template('footer.php'); ?>
