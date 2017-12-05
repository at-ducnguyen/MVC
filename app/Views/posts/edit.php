<?php template('header.php'); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<div class="col-md-8 col-md-offset-2">
	<script src='/tinymce/tinymce.min.js'></script>
	<h1 class="text-center">Thêm bài mới</h1>
	<script>
  tinymce.init({
    selector: '#content'
  });
  </script>

<form action="/posts/edit/<?=$id?>" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Tiêu đề</label>
    <div class="col-sm-10">
		<input class="form-control" name="title" placeholder="Nhập tiêu đề bài viết" required value="<?=$title?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Mô tả</label>
    <div class="col-sm-10">
		<input class="form-control" name="description" placeholder="Nhập mô tả ngắn cho bài viết" required value="<?=$description?>">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nội dung</label>
    <div class="col-sm-10">
     <textarea name="content" id="content" class="form-control" rows="12" name="content" placeholder="Nhập nội dung bài viết" value="<?=$content?>"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <label for="sel1" class="col-sm-2 col-form-label">Thể loại:</label>
  <div class="col-sm-10">
  <select class="form-control" name="category">
    <option>--- Chọn thể loại ---</option>
    <option>Thể thao</option>
    <option>Giải trí</option>
    <option>Kinh Tế</option>
    <option>Giáo dục</option>
    <option>Sức khỏe</option>
    <option>Thế giới</option>
  </select>
</div>
</div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Hình ảnh</label>
    <div class="col-sm-10">
     		<input class="form-control" name="image" type="file" required value="<?=$image?>">

    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="btn" class="btn btn-success" value="Create">
      <input type="reset" name="reset" value="Reset" class="btn btn-danger">
    </div>
  </div>
</form>


</div>

 