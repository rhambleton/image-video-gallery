<?php

require_once 'classes/Membership.php';
$membership = New Membership();
$membership->confirm_Member();

require_once 'classes/imagegallery.php';
$gallery = New imagegallery();

$albums = $gallery->get_albums();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/default.css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.7a-min.js"></script>
<![endif]-->


<title>Untitled Document</title>



</head>

<body>

<div id="container">
		<table border="0" cellpadding="0" cellspacing="0" width="800">
			<tr>
				<td width="200" align="left"><a href="index.php">< Back</a></td>
				<td>&nbsp;</td>
				<td width="200" align="right"><a href="login.php?status=loggedout">Log Out</a></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0">
			<?php
	
				foreach($albums as $album)
				{
					?>
					<tr><td colspan = "3"><a href="view_album.php?album=<?=$album;?>"><?php echo $gallery->get_title($album); ?></a></td></tr>
					<tr>
					
						<?php
							$previews = $gallery->get_previews($album);

							foreach($previews as $preview)
							{
								?>
									<td><a href="view_img.php?file=<?=$preview;?>&album=<?=$album;?>"><img src="img.php?file=<?=$preview;?>&size=thumb" border="0"></a></td><td>&nbsp;</td>
								<?php
							}
						?>
						</td>
					</tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<?php
				}
			?>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" width="800">
			<tr>
				<td width="200" align="left"><a href="index.php">< Back</a></td>
				<td>&nbsp;</td>
				<td width="200" align="right"><a href="login.php?status=loggedout">Log Out</a></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
		</table>
</div><!--end container-->

</body>
</html>
