<?php
echo "<title>User Agreement</title>";
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
<p class="style2 style4">While the administrators and moderators of this site will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every file. Therefore you acknowledge that all uploads made to this site express the views and opinions of the original poster and not the administrators, moderators or webmaster and hence will not be held liable.<br />
  You agree not to upload any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented, solicitation, malicious files, or any other material that may violate any applicable laws (including but not limited to copyright materials without permission of the owner). Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all uploads are recorded to aid in enforcing these conditions.<br />
  You agree that the webmaster, administrator and moderators of this site have the right to remove, edit or move any file at any time should they see fit. As a user you agree to any files you upload being stored in our servers. The webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.</p>
<?php
echo "<br> <font color=\"red\">For liability and security resons your IP will be logged when you upload a file, your IP is <strong>".$_SERVER['REMOTE_ADDR']."</font></strong>\n";
?>
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