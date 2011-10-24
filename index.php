<?php
include('config.inc.php');
echo "<title>$A_title</title>";
?>
  
<body background="template/black_woven.jpg">
<table align="center" style="text-align: left; width: 728px; height: 88px; background-color: rgb(0, 0, 102);" background="template/black_tile.jpg" border="1" cellpadding="2" cellspacing="2">

  <tbody>
    <tr>
      <td style="vertical-align: top;"><img style="width: 338px; height: 67px;" alt="" src="template/logo.png"><br>
      </td>
    </tr>
  </tbody>
</table>

<br>

<table align="center" style="text-align: left; width: 730px; height: 288px; background-color: rgb(0, 0, 102);" background="template/black_tile.jpg" border="1" cellpadding="2" cellspacing="2">

  <tbody>
    <tr>
      <td style="vertical-align: top;"><span style="color: white;">
	  <?php
$size=round($A_maxsize/1024,0);
echo "Max file size: $size kb.<br />";
echo "Allowed File Types: JPG, GIF, PNG, TXT, DOC, RTF, PDF, MP3, MID, WMA, MPG, MPEG, AVI, ZIP, RAR, JAR, and WMV \n";

echo "<br> <font color=\"red\">For liability and security resons your IP will be logged when you upload a file, your IP is <strong>".$_SERVER['REMOTE_ADDR']."</font></strong>\n";
?>
<br />
<form enctype="multipart/form-data" action="upload.php" method="POST">
<input name="userfile" type="file" /><br />
<?php
echo "<input type=\"checkbox\" name=\"agree\" value=\"22\" />I agree to the upload terms and conditions for ".$A_sitename." (<a href=\"agreement.php\">view terms</a>)<br />
<input type=\"submit\" value=\"Upload File\" />";
?>
</form>
Report a File:
<br />
*In your message include the file url and what the file contains <br />
*Include screenshots of the file if you can

<form action="mail.php" method="POST">
	<p>Name</p> <input type="text" name="name">
	<p>Email</p> <input type="text" name="email">
	<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
	<input type="submit" value="Send"><input type="reset" value="Clear">
	</form>
	  <br>
      </span>
      </td>
    </tr>
  </tbody>
</table>

<br>

<table align="center" style="text-align: center; width: 729px; height: 28px; color: #FF0000;" background="template/black_tile.jpg" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="vertical-align: top;">
	  <?
require_once('important.php');
echo " Copyright ".$A_sitename." | Powered by: ".$important."";
?>
      </td>
    </tr>
  </tbody>
</table>
<br>

</body>