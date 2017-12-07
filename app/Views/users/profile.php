<?php template('header.php'); ?>



<div class="container">    
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
				<img src="/<?=$avatar?>" alt="stack photo" class="img" style="width: 256px;height: 256px">
			</div>
			<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
				<div class="container" style="border-bottom:1px solid black">
					<h2 class="text-success"><?=$username?></h2>
				</div>
				<hr>
				<ul class="container details">
					<li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+91 90000 00000</p></li>
					<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?=$email?></p></li>
					<li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
					<li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.example.com</p></a> 
						<a href="/users/update"><button class="btn btn-danger">Cập nhật thông tin</button></a>
					</ul>
				</div>
			</div>
		</div>

		<style>
		.details li {
			list-style: none;
		}
		li {
			margin-bottom:10px;

		}
	</style>


	<div style="height: 120px"></div>
	<?php template('footer.php'); ?>
