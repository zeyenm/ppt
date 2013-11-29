<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- start include head -->
		<?php include ("../test/templates/head.php"); ?>
<!-- end include head -->
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