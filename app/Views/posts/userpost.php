<?php template('header.php'); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div style="height:20px"></div>
<div class=" col-md-12" >
<script type="text/javascript">
      function ConfirmDelete()
      {
           return confirm('Are you sure?');
      }
  </script>



<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách bài viết</h3>
	</div> 
	<div class="panel-body">
		<table class="table table-condensed table-hover">
	<thead>
		<div class="row">
			
			<div class="pull-right" style="margin-right: 20px; margin-bottom: 10px"><a href="/posts/add"><button class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Thêm mới </button></div></a> <br>

		</div>
		
	</thead>
	<tbody>
		<tr>
			<td class="text-primary" width="10%">STT</td>
			<td class="text-primary" width="40%">Title</td>
			<td class="text-primary" width="10%"> Thể loại</td>
	
			<td class="text-primary" width="20%">Ngày đăng</td>
			
			<td class="text-primary" width="20%">Action</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($userpost as $post): ?>
		<tr>
			<td><?=$i++; ?></td>
			<td><?=$post['title'] ?></td>
			<td><?=$post['category'] ?></td>
			
			<td><?=$post['created_at'] ?></td>
			
			<td>
			<td>
			<a href="edit/<?=$post['id']?>" ><button><i class="glyphicon glyphicon-edit"></i></button></a>
			<a href="delete/<?=$post['id']?>" onclick="return ConfirmDelete()"><button><i class="glyphicon glyphicon-trash"></i></button></a>
		</td>


			</td>
			
			
		</tr>
		<?php endforeach; ?>
		
	</tbody>
</table>
	</div>
</div>