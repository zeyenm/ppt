<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <link rel="stylesheet" href="../css/Styles.css">
  <head>
    <title>
      Login
    </title>
  </head>
  <body>
  <section class="login">
  <div class="title">Login</div>
    <form action="/includes/login.php" method="post">
      <fieldset>
		<?php include ('templates/user_form.php'); ?>
       	<?php include ('templates/register_link.php'); ?>
        <input type="submit" class="button" value="Login"/>
      </fieldset>
    </form>
	</section>
  </body>
</html>