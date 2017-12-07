<?php 
if(isset($_POST['submit'])){
	if($_POST['image'] == ''){
		echo 'x';
	}
	else{
		echo 'y';
	}
}
 ?>




<form action="" method="post">
	
	<input type="file" name="image">
	<input type="submit" value="ok" name="submit">

</form>