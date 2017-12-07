<?php template("header.php"); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<style>
#myList li{ display:none;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;

}
</style>

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


  <br>

  <div class="space20"></div>


  <div class="row main-left">
    <div class="col-md-3 ">
      <ul class="list-group" id="menu">

        <li href="showCatego" class="list-group-item menu1 active">
          Danh mục tin tức
        </li>

        <li href="#" class="list-group-item menu1">
          <a href="/">Trang chủ </a>
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
          <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Mới</h2>
        </div>

        <div class="panel-body">
          <ul id="myList">
            <?php foreach($posts as $post): ?>
              <li class="row-item row">
                <h3>
                  <span><?=$post['category'] ?></span> |
                  <small>by <i style="color: red; font-weight: bold;"><?=$post['author']; ?></i> at </small>
                  <small><i class="glyphicon glyphicon-time"></i> <?=date('F j, Y \a\t g:ia', strtotime( $post['created_at'] )); ?></small>
                </h3>
                <div class="col-md-12 border-right">
                  <div class="col-md-3">
                    <a href="/posts/view/<?php echo $post['id']; ?>">
                      <img style="width: 320px; height: 150px" class="img-responsive" src="/<?=$post['image'] ?>" alt="">
                    </a>
                  </div>

                  <div class="col-md-9">
                    <h4 style="color: blue;"><?=$post['title'] ?></h4>
                    <p><?=$post['description'] ?></p>
                    <a class="btn btn-primary" href="/posts/view/<?php echo $post['id']; ?>">Xem chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>

                </div>

                <div class="break"></div>
              </li>
            <?php endforeach; ?>
          </ul>
          <hr>
          <div class="col-md-offset-5">

            <button id="loadMore" class="btn btn-success">Xem Thêm</button>
            <button id="showLess" class="btn btn-danger">Quay Lại</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<script>
  $(document).ready(function () {
    size_li = $("#myList li").size();
    x=4;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
      x= (x+4 <= size_li) ? x+4 : size_li;
      $('#myList li:lt('+x+')').show();
    });
    $('#showLess').click(function () {
      x=(x-4<0) ? 4 : x-4;
      $('#myList li').not(':lt('+x+')').hide();
    });
  });
</script>

<?php template("footer.php"); ?>