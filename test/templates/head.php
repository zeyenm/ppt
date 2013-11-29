<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="../css/styles.css">
	<script type="text/javascript">
	 	 
	$( init );
	 
	function init() {
		for ( var i=1; i<3; i++ ) 
		{
			$('#makeMeDraggable' + i).draggable( {
				cursor: 'move',
				containment: 'document',
			stop: handleDragStop
			} );
		}
		
		function handleDragStop( event, ui ) 
		{
			var offsetXPos = parseInt( ui.offset.left );
			var offsetYPos = parseInt( ui.offset.top );
			alert( "Drag stopped!\n\nOffset: (" + offsetXPos + ", " + offsetYPos + ")\n");
		}
	 } 

	</script>
</head>
