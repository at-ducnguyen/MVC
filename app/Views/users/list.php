<?php template('header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script type="text/javascript">
      function ConfirmDelete()
      {
           return confirm('Are you sure?');
      }
  </script>
<div style="height:20px"></div>
<div class=" col-md-12" >   
<?php if (isAdmin()): ?>
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách User</h3>
	</div> 
	<div class="panel-body">
		<table class="table table-condensed table-hover">
	<thead>
		<div class="row">	
			<p><?php echo isset($err) ? $err : ''; ?></p>	
		</div>
	</thead>
	<tbody>
		<tr>
			<td class="text-primary" width="10%">STT</td>
			<td class="text-primary" width="20%">Username</td>	
			<td class="text-primary" width="20%">Email</td>
			<td class="text-primary" width="20%">Role</td>
			<td class="text-primary" width="20%">Action</td>
		</tr>
		<?php $i=1; ?>
		<?php foreach($list as $user): ?>
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
				<a href="edit/<?=$user['id']?>"><button><i class="glyphicon glyphicon-edit"></i></button></a>
				<a href="delete/<?=$user['id']?>" onclick="return ConfirmDelete()"><button><i class="glyphicon glyphicon-trash"></i></button></a>
			</td>			
		</tr>
		<?php endforeach; ?>		
	</tbody>
</table>
	</div>
</div>
<?php else: ?>
	<h2 class="text-center text-danger">Bạn không có quyền truy cập trang này. Hãy đăng nhập với quyền Admin !</h2>
	<?php endif; ?>