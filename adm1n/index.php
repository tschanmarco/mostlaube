<?php
  if(isset($_POST['statustext'])) {
    $fhandle = fopen('../config.php', 'w');
    fwrite($fhandle, serialize($_POST));
    fclose($fhandle);
  }

  $config = file_get_contents('../config.php');
  $config = unserialize($config);

  $statustext = $config['statustext'];
  $closedcheck = isset($config['closed']) ? 'checked' : '';
  $greenchecked = $config['color'] == 'green' ? 'checked="checked"' : '';
  $redchecked = $config['color'] == 'red' ? 'checked="checked"' : '';

  $showinfo = isset($config['showinfo']) ? 'checked' : '';
  $infotitle = $config['infotitle'];
  $infotext = $config['infotext'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>MOSTLAUBE Administration</title>

  <style>
     body,td { font-size:12px; font-family:arial,helvetica,sans-serif; }
  </style>

	<!-- tinymce initialization -->
	<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
		forced_root_block: false,
		height: 300,
		width: 480,
		plugins: "code, link, image",
	    selector: "textarea",
	    // content_css: "/css/styles.css",
	    menubar: false,
	    toolbar: "bold italic | bullist numlist | undo redo | image link code removeformat"
	 });
	</script>
</head>

<body>

<table width="100%" height="100%" border="0">
  <tr>
    <td align="center">

      <img id="logo" src="/img/logo_500.gif" width="500" height="107"><br/><br/><br/>
      <form action="#" method="post">
      <table cellspacing="1" cellpadding="4" bgcolor="black" border="0">
        <tr bgcolor="#447a1c"><td colspan="3" style="color:#fff"><b>Administration</b></td></tr>
        <tr bgcolor="#c2e0ac"><td colspan="3"><b>HEUTE Information</b></td></tr>
        <tr bgcolor="white"><td>Geschlossen: </td><td colspan="2"><input type="checkbox" name="closed" <?=$closedcheck?>></td></tr>
        <tr bgcolor="white"><td>Anderer Hinweis: </td><td><input type="text" name="statustext" style="width:350px;" value="<?=$statustext?>"></td><td><input type="radio" name="color" value="green" <?=$greenchecked?>>gr&uuml;n&nbsp;&nbsp;<input type="radio" name="color" value="red" <?=$redchecked?>>rot</td></tr>
        <tr bgcolor="#c2e0ac"><td colspan="3"><b>Informationsbox</b></td></tr>
        <!-- <tr bgcolor="white"><td>Info Titel: </td><td><input type="text" name="infotitle" style="width:350px;" value="<?=$infotitle?>"></td></tr> -->
        <tr bgcolor="white"><td>Info Text: </td><td><textarea rows="5" style="width:350px" name="infotext"><?=$infotext?></textarea></td><td><input type="checkbox" name="showinfo" <?=$showinfo?>> Anzeigen</td></tr>
        <tr bgcolor="#447a1c"><td colspan="3" align="center"><input type="submit" value="Speichern"></td></tr>
      </table>
      </form>
    </td>
  </tr>
</table>

</body>

</html>