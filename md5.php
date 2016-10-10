<form action="md5.php" method="POST">
	<input type=text name="text" value="<?=$_POST['text'];?>"><input type="submit" value="go"?><BR>
</form>


<?php

	if(isset($_POST['text']))
	{
		echo md5($_POST['text']);
	}
?>
