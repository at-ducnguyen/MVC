<?php template('header.php'); ?>

<div style="height:  500px">
	


<div class="site-error">

    

    <div class="alert alert-danger text-center">
         <?php echo isset($error) ? $error : ''; ?>
    </div>


</div>
</div>
<?php template('footer.php'); ?>