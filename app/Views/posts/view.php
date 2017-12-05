<?php template("header.php"); ?>
<!-- Page Content -->
<div class="container">
  <div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-lg-9">

      <!-- Blog Post -->

      <!-- Title -->
      <h3 style="color: blue"><?=$postdetail['title']; ?></h3>

      
      <p class="lead">
        by <span style="font-weight: bold;color: red"><?=$postdetail['author']; ?></span>
      </p>

      
      <img class="img-responsive" src="/<?=$postdetail['image']; ?>" alt="">

      
      <br>
      <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$postdetail['created_at']; ?></p>
      <hr>

      
      <p class="lead">
        <?=$postdetail['content']; ?>
      </p>

      <hr>
      <!-- Comments Form -->
      <div class="well">
        <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
        <form role="form" action="/posts/comment" method="post">
          <div class="form-group">
            <textarea class="form-control" name="content" rows="3"></textarea>
          </div>
          <input type="hidden" name="post_id" value="<?=$postdetail['id'];?>">
          <input type="submit" class="btn btn-primary" value="Gửi" name="comment">
        </form>
      </div>

      <hr>

      <!-- Posted Comments -->

      <!-- Comment -->
      <?php foreach($comments as $comment): ?>

        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" src="/image/1.png" style="width: 64px;height: 64px" alt="">
          </a>
          <div class="media-body">
            <h4 class="media-heading"><?=$comment['username'];?>
              <small><?=$comment['created_at']?></small>
            </h4>
            <?=$comment['content']?>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- Comment -->
      

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-3">

      <div class="panel panel-default">
        <div class="panel-heading"><b>Tin liên quan</b></div>
        <div class="panel-body">

          <!-- item -->
          <?php foreach ($list as $post): ?>

            <div class="row" style="margin-top: 10px;">
              <div class="col-md-12">
                
                <a href="/posts/view/<?=$post['id']?>"><i class="glyphicon glyphicon-list"></i> <span style="color: blue"><?=$post['title']; ?></span></a>
              </div>
              
              <div class="break"></div>
            </div>
          <?php endforeach; ?>
          <!-- end item -->

          <!-- item -->
          
          <!-- end item -->
        </div>
      </div>

      
      
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<?php template("footer.php"); ?>