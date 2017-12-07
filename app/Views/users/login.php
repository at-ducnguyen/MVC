    <?php template('header.php'); ?>

<div class="container">

      <!-- slider -->
      <div class="row carousel-holder">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-success">
            <div class="panel-heading">Đăng nhập
              <p><span class="text-danger"><?php echo isset($error) ? $error: ''; ?> </span></p></div>
             
            <div class="panel-body">
              <form action="/users/checkLogin" method="post">
              <div>
                  <label>Tên đăng nhập</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
              </div>
              <br>  
              <div>
                  <label>Mật khẩu</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <br>
              <input type="submit" name="login" class="btn btn-success" value="Đăng nhập">
              
              </form>
            </div>
        </div>
            </div>
            <div class="col-md-4" style="height: 500px"></div>
        </div>
        <!-- end slide -->
    </div>

    <?php template('footer.php'); ?>