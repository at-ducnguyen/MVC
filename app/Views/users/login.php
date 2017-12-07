    <?php template('header.php'); ?>
    <style>
  input:focus:invalid{
    border:solid 2px #F5192F;
}

input:focus:valid{
    border:solid 2px green;
    background-color:#fff;
}
</style>

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
                  <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" required oninvalid="this.setCustomValidity('Tên đăng nhập không được bỏ trống')" oninput="setCustomValidity('')">
              </div>
              <br>  
              <div>
                  <label>Mật khẩu</label>
                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required oninvalid="this.setCustomValidity('Mật khẩu không được bỏ trống')" oninput="setCustomValidity('')">
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