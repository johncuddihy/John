<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Test Form</title>
</head>

<body bgcolor=#b5d8ff>
<p align=center>
</p>

<form method="POST" action="">
	<div align=center>

<table border="0" width="60%"  height=100px bgcolor=#FFFFFF>
	<tr>
		<td colspan=2><font face="Aller Display" size="7" color=#969cd6>My Form</font></td>
			</tr>

	<tr>
		<td colspan=2> <hr width=100% color=#000000 size=3></td>
			</tr>
                 <tr>
		<td> <font face="Aller Light">
			<?php

  require_once('./common/db.inc');


				$as_fname = addslashes($_POST['fname']);
				$tr_fname = trim($as_name);
				$as_lname = addslashes($_POST['lname']);
				$tr_lname = trim($as_lname);
				$as_message = $_POST['message'];
				$tr_message = trim($as_message);



				$query = "INSERT INTO forms (fname,lname,msg) VALUES('$tr_fname','$tr_lname','$tr_message')";
				$result = mysql_query($query);
				if(mysql_affected_rows() == 1)
				{

					echo "Thanks for your message " . stripslashes($tr_fname) .  stripslashes($tr_lname)

                 }
?>
</font></td>
	</tr>


		</table>
</div>

	</form>

</body>

</html>