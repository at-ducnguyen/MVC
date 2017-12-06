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
				    	<form action="/users/update" method="post" enctype="multipart/form-data">
				    		<div>
				    			<label>Họ tên</label>
							  	<input class="form-control" name="username"  value="<?=$user['username']?>" readonly>
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" value="<?=$user['email']?>">
							</div>
							<br>	
							<div>
								
				    			<label>Đổi mật khẩu</label>
							  	<input type="password" class="form-control" name="password" required>
							</div>
							<br>
							
							<div>
				    			<label>Avatar</label>
							  	<input type="file" class="form-control" name="avatar" required value="<?=$user['avatar']?>">
							</div>
							<br>
							<input type="submit" class="btn btn-success" value="Cập nhật" name="update">

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
