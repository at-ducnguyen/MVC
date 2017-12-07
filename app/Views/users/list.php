<?php template('header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script type="text/javascript">
      function ConfirmDelete()
      {
           return confirm('Bạn có chắc chắn muốn xóa không?');
      }
  </script>
<div style="height:20px"></div>
<div class=" col-md-12" >   
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách User</h3>
	</div> 
	<div class="panel-body" style="margin-left: 100px">
		<table class="table table-condensed table-hover">
	<thead>
		<div class="row">	
			<p><?php echo isset($error) ? $error : ''; ?></p>	
		</div>
	</thead>
	<tbody>
		<tr>
			<td class="text-primary" width="5%">STT</td>
			<td class="text-primary" width="20%">Username</td>	
			<td class="text-primary" width="20%">Email</td>
			<td class="text-primary" width="20%">Role</td>
			<td class="text-primary" width="30%">Action</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($users as $user): ?>
			<?php  ?>
		<tr>
			<td><?=$i++; ?></td>
			<td><?=$user['username'] ?></td>
			
			<td><?=$user['email'] ?></td>
			<?php if($user['role']==1): ?>
			<td>Admin</td>
		<?php else: ?>
			<td>Member</td>
		<?php endif; ?>			
			<td>
				<?php if(!isAdmin()): ?>
				<a href="info/<?=$user['id']?>"><button><i class="glyphicon glyphicon-eye-close"></i></button></a>
			<?php else: ?>
				<a href="edit/<?=$user['id']?>"><button><i class="glyphicon glyphicon-edit"></i></button></a>
				<a href="delete/<?=$user['id']?>" onclick="return ConfirmDelete()"><button><i class="glyphicon glyphicon-trash"></i></button></a>
			<?php endif; ?>
			</td>			
		</tr>
		<?php endforeach; ?>		
	</tbody>

</table>
<nav aria-label="Page navigation example" style="text-align: center;">
  <ul class="pagination">
    <?php if($currentPage > 1 && $totalPage > 0) : ?>
      <li class="page-item"><a class="page-link" href="/users/list/<?=($currentPage-1)?>">Quay lại</a></li>
    <?php endif; ?>
    <?php for($i=1; $i<=$totalPage; $i++): ?>
      <li class="page-item"><a class="page-link" href='/users/list/<?=$i?>'><?=$i?></a> </li>
    <?php endfor; ?>
    <?php if($currentPage < $totalPage && $totalPage > 1): ?>
      <li class="page-item"><a class="page-link" href="/users/list/<?=($currentPage+1)?>"> Kế tiếp</a> </li>
    <?php endif;?>
  </ul>
</nav>
	</div>
</div
