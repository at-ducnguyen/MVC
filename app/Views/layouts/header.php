<?php 
use App\Core\Session;
display_errors();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Asian Tech Internship</title>
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap Core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/shop-homepage.css" rel="stylesheet">
  <link href="/css/my.css" rel="stylesheet">
  
  
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><i class="glyphicon glyphicon-home"></i> Trang Chủ</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="/home/about">Giới thiệu</a>
          </li>
          <li>
            <a href="/home/contact">Liên hệ</a>
          </li>
        </ul>

        <form class="navbar-form navbar-left" method="post" action="/posts/search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nhập vào từ khóa..." name="key" required>
          </div>
          <input type="submit" class="btn btn-default" name="search" value="Tìm kiếm">
        </form>



        <ul class="nav navbar-nav pull-right">
          <?php if(!isAdmin()): ?>
          <li>
              <a href="/users/list">
                <i class ="glyphicon glyphicon-th-list"></i> Member List

              </a>
            </li>
          <?php endif; ?>
          <?php  if (isGuest()): ?>
            <li>
              <a href="/users/signup">Đăng ký <i class="glyphicon glyphicon-edit"></i></a>
            </li>
            <li>
              <a href="/users/login">Đăng nhập <i class="glyphicon glyphicon-log-in"></i></a>
            </li>
          <?php  else :?>

            <?php if (isAdmin()) :  ?>
              <li>
                <a href="/posts/list">
                  <i class ="glyphicon glyphicon-th-list"></i> Quản lý bài viết
                </a>
              </li>
            <?php elseif(!isGuest()): ?>
              <li>
                <a href="/posts/userpost">
                  <i class ="glyphicon glyphicon-th-list"></i> Bài viết của tôi
                </a>
              </li>
            <?php endif; ?>
            <li>
              <a href="/posts/create">
                <i class ="glyphicon glyphicon-edit"></i> Đăng bài

              </a>
            </li>

            

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user"></span> 
                <span style="font-weight:bold"><?php echo Session::get('username'); ?> </span>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/users/profile"><i class="glyphicon glyphicon-user"></i> Thông tin tài khoản</a></li>
                  <li><a href="/users/update"><i class="glyphicon glyphicon-edit"></i> Chỉnh sửa thông tin</a></li>
                  <?php if (isAdmin()) :  ?>
                  <li><a href="/users/list"><i class="glyphicon glyphicon-send"></i> Quản lý thành viên </a></li>
                  <?php else: ?>
                    <li><a href="/posts/userpost"><i class="glyphicon glyphicon-share"></i> Bài viết của tôi </a></li>
                  <?php endif; ?>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="/users/logout">Đăng xuất <i class="glyphicon glyphicon-log-out"></i></a>
                  </li>
                </ul>
              </li>


            <?php endif; ?>
          </ul>
        </div>



        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

