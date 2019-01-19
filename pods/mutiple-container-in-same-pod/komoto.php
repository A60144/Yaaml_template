<?php
$host = array_key_exists('host', $_REQUEST) ? $_REQUEST['host'] : null;
//$Account = array_key_exists('Account', $_REQUEST) ? $_REQUEST['Account'] : null;
//$Pwd = array_key_exists('Pwd', $_REQUEST) ? $_REQUEST['Pwd'] : null;
$CamID = array_key_exists('CamID', $_REQUEST) ? $_REQUEST['CamID'] : null;

//  http://192.168.171.52/Image2.jpg?1544495474051
//  http://localhost/komoto.php?host=192.168.171.52&CamID=2

?>

<HTML>
<HEAD>
<meta http-equiv="refresh" content="1">
</HEAD>
<BODY>
  <center>
  <img src="http://<?php echo $host; ?>/Image<?php echo $CamID; ?>.jpg" >
  </center>
</BODY>
</HTML>
