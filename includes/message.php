<?php 
	if(isset($_SESSION['notification']['message'])){ ?>
	<div>
		<span class="<?= $_SESSION['notification']['type'] ?>">
			<h4> <?php $_SESSION['notification']['message'] ?> </h4>
		</span>
	
	</div>
	
	<?php $_SESSION['notification'] = []; ?>
<?php } ?>