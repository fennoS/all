<?php
	$link = new mysqli('localhost','root','','game');
	if ($link->connect_error) {
		die('connect Error: ' . $link->connect_error);
	}
	$sql = 'SELECT FROM members';
	
	$cursor = $link->query($sql);
	
	$member = $cursor->fetch_all(MYSQLI_ASSOC);
	echo '<hl>alle members!</hl>';
	var_dump($member);
?>

<h1>start forreach</h1>
<table>
<?php
foreach ($member as $member):
	echo "<h2>just one member</h2>";

?>
	
<?php
	endforeach;
?>
	   
	   
</table>