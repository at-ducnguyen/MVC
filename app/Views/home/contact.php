
 <?php 
include_once '../app/Views/layouts/header.php';
 ?>

    <!-- Page Header -->
    <header class="masthead">
      <div class="overlay"></div>
      <div class="container">
        <div class="row"> 
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Liên hệ với chúng tôi</h1>
             <?php if(isset($_POST['btn'])): ?>
              <p class="text-success">Đã gửi thành công!</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <form method="post" action="/home/contact">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Họ và tên</label>
                <input type="text" class="form-control" placeholder="Nhập vào họ và tên" name="name" required oninvalid="this.setCustomValidity('Không được bỏ trống')" oninput="setCustomValidity('')">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Địa chỉ Email" name="email" required >
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Số điện thoại</label>
                <input type="tel" class="form-control" placeholder="Số điện thoại liên hệ" name="phone" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Lời nhắn</label>
                <textarea rows="5" class="form-control" placeholder="Lời nhắn..." name="content" required></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="btn" value="Gửi liên hệ">
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
     <?php 
include_once '../app/Views/layouts/footer.php';
 ?>