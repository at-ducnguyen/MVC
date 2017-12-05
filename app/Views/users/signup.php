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
     <script type="text/javascript">
 
    $(document).ready(function() {
 
        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formDemo").validate({
                    rules: {
                        ho: "required",
                        ten: "required",
                        diachi: {
                            required: true,
                            minlength: 2
                        },
                        sodienthoai: {
                            required: true,
                            minlength: 5
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        dieukhoan: "required"
                    },
                    messages: {
                        ho: "Vui lòng nhập họ",
                        ten: "Vui lòng nhập tên",
                        diachi: {
                            required: "Vui lòng nhập địa chỉ",
                            minlength: "Địa chỉ ngắn vậy, chém gió ah?"
                        },
                        sodienthoai: {
                            required: "Vui lòng nhập số điện thoại",
                            minlength: "Số máy quý khách vừa nhập là số không có thực"
                        },
                        password: {
                            required: 'Vui lòng nhập mật khẩu',
                            minlength: 'Vui lòng nhập ít nhất 5 kí tự'
                        },
                        confirm_password: {
                            required: 'Vui lòng nhập mật khẩu',
                            minlength: 'Vui lòng nhập ít nhất 5 kí tự',
                            equalTo: 'Mật khẩu không trùng'
                        },
                        email: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password as above"
                        },
                        email: "Vui lòng nhập Email",
                        agree: "Vui lòng đồng ý các điều khoản"
                    }
                });
    });
    </script>

<div style="height: 120px"></div>
    <?php template('footer.php'); ?>
