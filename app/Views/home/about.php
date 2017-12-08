 <?php 
 template('header.php');
 ?>

 <div class="container">

  <!-- slider -->
  <div class="row carousel-holder">
    <div class="col-md-12">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img class="slide-image" src="/uploads/slide2.jpg" alt="">
          </div>
          <div class="item">
            <img class="slide-image" src="/uploads/slide1.jpg" alt="">
          </div>
          <div class="item">
            <img class="slide-image" src="/uploads/slide3.jpg" alt="">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
  </div>
  <!-- end slide -->

  <div class="space20"></div>
  <div class="row main-left">
    <div class="col-md-3 ">
      <ul class="list-group" id="menu">
        <li href="showCatego" class="list-group-item menu1 active">
          Danh mục tin tức
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts">Trang chủ </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/1">Thể thao </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/2">Giải trí </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/3">Kinh tế </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/4">Giáo dục </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/5">Sức khỏe </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/6">Thế giới</a>
        </li>

      </ul>
    </div>

    <div class="col-md-9">
      <div class="panel panel-default">            
        <div class="panel-heading" style="background-color:#337AB7; color:white;" >
          <h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
        </div>

        <div class="panel-body">
          <!-- item -->
          <p>
            Lorem ipLorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.sum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>

<!-- Footer -->
<?php 
template('footer.php');
?>
