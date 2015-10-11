<!DOCTYPE html>
<html>
<head>
	<title>Gnomie Homies Map editor</title>

	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		textarea{
			height: 400px;
			width: 500px;
		}
		ul,textarea{
			float: left;
			padding: 20px;
			border: 1px solid red;
			text-transform: uppercase;
		}
		#preview{
			clear: both;
			height: 400px;
			width: 500px;
			border: 1px solid #000;
			margin: 10PX AUTO;


		}

		#preview div{
			
			
			height: 25px;
			width:  25px;
			display: inline-block;
		}
		hr{
			clear: both;

		}

		.MAP-{
			background-color: #CCC;
		}
		.MAP-A{
			background-color: RED;
		}
		.MAP-B{
			background-color: GREEN;
		}
		.MAP-C{
			background-color: BLUE;
		}
		.MAP-D{
			background-color: ORANGE;
		}

		.MAP-1{
			background-color: #666;
		}
		.MAP-2{
			background-color: #777;
		}
		.MAP-3{
			background-color: #888;
		}
		.MAP-4{
			background-color: #999;
		}


	</style>
</head>
<body>

<div id="preview">

</div>
<form method="post" action="process.php">
	<input type="text" name="map_name" value="<?php echo $_GET['loadmap']; ?>"/><input type="submit" value="Save Map"/> <br>
	<textarea name="map_data"><?php if(isset($_GET['loadmap'])){ include("/home/ubuntu/workspace/mapedit/maps/".$_GET['loadmap']); } ?></textarea>
	
</form>

<ul>
	<li><strong>1</strong> Player Start</li>
	<li><strong>2</strong> Player Start</li>
	<li><strong>3</strong> Player Start</li>
	<li><strong>4</strong> Player Start</li>
</ul>
<ul>
	<li><strong>SPACE</strong> Floor Texture</li>
	<li><strong>A</strong> Wall Texture</li>
	<li><strong>B</strong> Wall Texture</li>
	<li><strong>C</strong> Wall Texture</li>
	<li><strong>D</strong> Wall Texture</li>

</ul>
<hr>
<h3>Load Existing Map</h3>
<?php
$dir = "/home/ubuntu/workspace/mapedit/maps";
$files1 = scandir($dir);


foreach($files1 as $file){
	if($file != "."){
		if($file != ".."){
			echo '<a href="?loadmap='.$file.'">'.$file.'</a><br>';
		}
	}
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript">
$(function () {
	
var val = $('textarea').val();
	var val = val.toUpperCase();
	var chars = val.split('');
	//console.log(chars);

	$( "#preview" ).html("");
	chars.forEach(function(entry) {
    	
    	
    	//console.log(entry);
    	if(entry.indexOf("\n")==-1){

				$( "#preview" ).append( "<div class='MAP-"+entry+"'></div>" );
		
		
		}else{
		  

				$( "#preview" ).append( "<hr>" );

		}
	});
	

	
$('textarea').bind('input propertychange', function() {	
	var val = $(this).val();
	var val = val.toUpperCase();
	var chars = val.split('');
	//console.log(chars);

	$( "#preview" ).html("");
	chars.forEach(function(entry) {
    	
    	
    	//console.log(entry);
    	if(entry.indexOf("\n")==-1){

				$( "#preview" ).append( "<div class='MAP-"+entry+"'></div>" );
		
		
		}else{
		  

				$( "#preview" ).append( "<hr>" );

		}
	});
});



});
</script>
</body>
</html>