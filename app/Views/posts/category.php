<?php template("header.php"); ?>


<!-- Page Content -->
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
  <br>
      

  <div class="space20"></div>


  <div class="row main-left">
    <div class="col-md-3 ">
      <ul class="list-group" id="menu">

        <li href="showCatego" class="list-group-item menu1 active">
          Danh mục tin tức
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts"><i class="glyphicon glyphicon-home"></i> Trang chủ </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/1"><i class="glyphicon glyphicon-edit"></i> Thể thao </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/2"><i class="glyphicon glyphicon-headphones"></i> Giải trí </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/3"><i class="glyphicon glyphicon-usd"></i> Kinh tế </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/4"><i class="glyphicon glyphicon-education"></i> Giáo dục </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/5"><i class="glyphicon glyphicon-gift"></i> Sức khỏe </a>
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/posts/category/6"><i class="glyphicon glyphicon-edit"></i> Thế giới </a>
        </li>



        
      </ul>
    </div>

    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white;" >
          <h2 style="margin-top:0px; margin-bottom:0px;"> Kết quả</h2>
        </div>
        <div class="panel-body">
          <p style="color: red; font-weight: bold;"><?=isset($error) ? $error : '';?></p>
          <?php foreach($posts as $post): ?>
            <div class="row-item row">
              <h3>
                <a href="#"><?=$post['category'] ?></a> |
                <small><a href="loaitin.html"><i><?='by '.$post['author']; ?></i></a></small>
                
              </h3>
              <div class="col-md-12 border-right">
                <div class="col-md-3">
                  <a href="/posts/view/<?php echo $post['id']; ?>">
                    <img style="width: 320px; height: 150px" class="img-responsive" src="/<?=$post['image'] ?>" alt="">
                  </a>
                </div>

                <div class="col-md-9">
                  <h3><?=$post['title'] ?></h3>
                  <p><?=$post['description'] ?></p>
                  <a class="btn btn-primary" href="/posts/view/<?php echo $post['id']; ?>">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>

              </div>

              <div class="break"></div>
            </div>
          <?php endforeach; ?> 

        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- end Page Content -->

<!-- Footer -->

<?php template("footer.php"); ?>