<?php
  include ("check.php");
?>
	<?php include ("../templates/head.php"); ?>
    <?php include "../templates/user_info.php" ?>
	<a id="item" href="#">Onclick</a>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#item").click(function(){
	$("#item2").load('http://localhost:8080/test/includes/load_images.php');
  });
});
	</script>
		  <div id="item2"></div>
	    <p>
      <a href="../includes/logout.php">Logout</a>
    </p>