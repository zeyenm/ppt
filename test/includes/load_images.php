<script type="text/javascript">
$( init );
function init() {
for ( var i=1; i<3; i++ )
{
$('#makeMeDraggable' + i).draggable( {
cursor: 'move',
containment: 'document',
//stop: handleDragStop
} );
}
// function handleDragStop( event, ui )
// {
// var offsetXPos = parseInt( ui.offset.left );
// var offsetYPos = parseInt( ui.offset.top );
// alert( "Drag stopped!\n\nOffset: (" + offsetXPos + ", " + offsetYPos + ")\n");
// }
}
</script>
<?php
  $j=0;
  foreach(glob('../images/*.*') as $filename){
  $j++;
     echo '<img src="'.$filename.'" id="makeMeDraggable'.$j.'" height="300">Drag and Drop '.$filename.'</img><br>';

 }
?>