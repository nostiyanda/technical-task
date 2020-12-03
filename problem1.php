<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form action="" method="post" align="center">

<div class="box">
<p><label>Enter Number of Servers</label><input type="number" name="servers" required /><br /></p>
<p><label>Enter Server Load At 1Min</label><input type="number" name="serverload[]" min="1" max="100" required /><br /></p>
<p><label>Enter Server Load At 2Min</label><input type="number" name="serverload[]" min="1" max="100" required /><br /></p>
<p><label>Enter Server Load At 3Min</label><input type="number" name="serverload[]" min="1" max="100" required /><br /></p>
<p><label>Enter Server Load At 4Min</label><input type="number" name="serverload[]" min="1" max="100" required /><br /></p>
<p><label>Enter Server Load At 5Min</label><input type="number" name="serverload[]" min="1" max="100" required	/><br /></p>

<input type="submit" name="submit"/>
</div>

<div class="box">
<p>Server Running After 5 Minute</p>
<?php

if(isset($_POST['submit'])){
$serverload = $_POST['serverload'];
$servers=$_POST['servers'];
for ($x = 0; $x < 5; $x++) {
	if( $serverload[$x] < 50 ){
		$servers = floor($servers/2);
	}
	else{
		$servers = ($servers*2)+1;
	}
}
echo $servers;
}

?>

</div>

</form>
</body>
</html>
