<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="../test/css/styles.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
	<script type="text/javascript">
 
$( init );
 
function init() {
  $('#login').draggable();
 }
</script>
  <head>
    <title>
      Login
    </title>
  </head>
  <body>
  <section class="login" id="login">
  <div class="title" >Login</div>
    <form action="../test/includes/login.php" method="post">
      <fieldset>
		<?php include ('../test/templates/user_form.php'); ?>
       	<?php include ('../test/templates/register_link.php'); ?>
        <input type="submit" class="button" value="Login"/>
      </fieldset>
    </form>
	</section>
  </body>
</html>