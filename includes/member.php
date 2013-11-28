<?php
  include ("check.php");
?>
    <div>
	<p>
      Ihre Benutzer-ID ist: <?php echo $_SESSION["id"];?> <br />
      Ihr Benutername ist: <?php echo $_SESSION["name"];?>
    </p>
	</div>
	<style>#makeMeDraggable { width: 300px; height: 300px; background: red; }</style> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> 
<script type="text/javascript">
 
$( init );
 
function init() {
for ( var i=1; i<3; i++ ) {
  $('#makeMeDraggable' + i).draggable();
}
 }
</script>
<div id="content" style="height: 400px;">
<?php
  $j=0;
  foreach(glob('../images/*.*') as $filename){
  $j++;
     echo '<img src="'.$filename.'" id="makeMeDraggable'.$j.'" height="300">'.$filename.'</img><br>';

 }
?>
  
</div>
    <p>
      <a href="logout.php">Logout</a>
    </p>