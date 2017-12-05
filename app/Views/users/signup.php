<?php template('header.php'); ?>

    <!-- Page Content -->
    <div class="container">
    	<!-- slider -->
    	<div class="row carousel-holder">

            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading text-danger">Đăng ký tài khoản
				  		<br><p class="text-danger"><?php echo isset($err) ? $err: ''; ?></p>

				  	</div>
				  	<div class="panel-body">
				    	<form action="signup" method="post" enctype="multipart/form-data">
				    		<div>
				    			<label>Username</label>
							  	<input class="form-control" placeholder="Username" name="username" required>
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" required 
							  	>
							</div>
							<br>	
							<div>
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="password" required>
							</div>
							<br>
							<!-- <div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br> -->
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

<div style="height: 120px"></div>
    <?php template('footer.php'); ?>
