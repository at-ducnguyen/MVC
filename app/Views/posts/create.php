<?php template('header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="col-md-8 col-md-offset-2">
	<script src='/tinymce/tinymce.min.js'></script>
	<h1 class="text-center">Thêm bài mới</h1>
	<script>
  tinymce.init({
    selector: '#content'
  });
  </script>
<form action="create" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Tiêu đề</label>
    <div class="col-sm-10">
		<input class="form-control" name="title" placeholder="Nhập tiêu đề bài viết" required oninvalid="this.setCustomValidity('Không được để trống trường này')" oninput="setCustomValidity('')">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Mô tả</label>
    <div class="col-sm-10">
		<input class="form-control" name="description" placeholder="Nhập mô tả ngắn cho bài viết" required oninvalid="this.setCustomValidity('Không được để trống trường này')" oninput="setCustomValidity('')">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nội dung</label>
    <div class="col-sm-10">
     <textarea name="content" id="content" class="form-control" rows="12" name="content" placeholder="Nhập nội dung bài viết"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <label for="sel1" class="col-sm-2 col-form-label">Thể loại:</label>
  <div class="col-sm-10">
  <select class="form-control" name="category" required oninvalid="this.setCustomValidity('Vui lòng chọn thể loại bài viết')" oninput="setCustomValidity('')">
    <option value="" disabled selected>--- Chọn thể loại ---</option>
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
     		<input class="form-control" name="image" type="file" required oninvalid="this.setCustomValidity('Vui lòng chọn một hình ảnh cho bài viết')" oninput="setCustomValidity('')">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="btn" class="btn btn-success" value="Đăng bài">
      <input type="reset" name="reset" value="Làm lại" class="btn btn-danger">
    </div>
  </div>
</form>


</div>

 