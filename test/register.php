<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <link rel="stylesheet" href="../test/css/styles.css">
  <head>
    <title>
      Registrieren
    </title>
  </head>
  <body>
  <section class="login">
  <div class="title">Register new account</div>
    <form action="/test/includes/register.php" method="post">
      <fieldset>
        <?php include "../test/templates/user_form.php" ?>
	<input type="text" required title="Email required" name="email" id="email" placeholder="Email" data-icon="x">
        <input type="submit" class="button" value="Registrieren" />
      </fieldset>
    </form>
	</section>
  </body>
</html>