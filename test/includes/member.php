<?php
  include ("check.php");
?>
	<?php include ("../templates/head.php"); ?>
    <?php include "../templates/user_info.php" ?>
	<div id="Navigation">
	<a id="item" href="#">Onclick</a>
	<script type="text/javascript">
	$(document).ready(function(){	
		$("#item").click(function(){
		$("#content").load('http://localhost:8080/test/includes/load_images.php');
		});	
	});
	</script>		  
	    <p>
			<div id="logout">
				<a href="../includes/logout.php">Logout</a>
			</div>
		</p>
		</div>
		<div id="content"></div>