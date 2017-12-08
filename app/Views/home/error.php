<?php template('header.php'); ?>
<div style="height:  500px">
<div class="site-error">
    <div class="alert alert-danger text-center">
         <h3><?php echo isset($error) ? $error : ''; ?> </h3>
         <p>Vui lòng xem lại đường dẫn</p>
    </div>
</div>
</div>
<?php template('footer.php'); ?>