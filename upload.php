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
$upl=1;
$ext=date(U);

if($_POST["agree"] !=22){
exit("You must agree to the terms and conditions to upload to $A_sitename!");
echo "You must agree to the terms and conditions to upload to $A_sitename!";
}

$FILE_EXTS = array('.zip','.jpg','.png','.gif','.doc','.pdf','.mp3','.wma','.mid','.mpg','.mpeg','.avi','.wmv','.txt','.rtf','.zip','.rar','.jar'); 
$file_name = $_FILES['userfile']['name'];
$file_ext = strtolower(substr($file_name,strrpos($file_name,".")));
if (!in_array($file_ext, $FILE_EXTS)){
exit("The file which was uploaded was not a valid file type.");
echo "The file which was uploaded was not a valid file type.";
}


if($_FILES['userfile']['size']>$A_maxsize){
	echo "The file you uploaded was too big.<br />";
	echo "Max File Size: ".round(($A_maxsize/1024),2)."kb<br />";
	echo "Uploaded Image Size: ".round(($_FILES['userfile']['size']/1024),2)."kb<br />";
	$upl=0;
}
echo '<pre>';
if($upl==1){
	$uploaddir = upload_dir();
	$uploaddir=$uploaddir.substr($ext,0);
	if(!file_exists($uploaddir)){
		makeindex($uploaddir."log.txt");
	}
	$uploadfile = $uploaddir.$_FILES['userfile']['name']; 
	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	   $address = getimgplace(substr($ext,0));
	   echo "File is valid, and was successfully uploaded.<br>\n";
	   echo "Location: $address \n";
	   echo "BBCode Image: <strong>"."["."img"."]"."$address"."["."/"."img"."]"."</strong> \n";
	   echo "BBCode URL/Download: <strong>"."["."url"."]"."$address"."["."/"."url"."]"."</strong><br><br><br>\n";
	   echo "Your IP: <font color=\"red\">".$_SERVER['REMOTE_ADDR']."</font>\n";
	   echo "Date: ".date(r);
	}
	else{
	   echo "Possible file upload attack!\n";
	}
}
if($A_debug==1){
	echo 'Here is some more debugging info:<br />';
	print_r($_FILES);
}
print "</pre>";
//--=====> functions <=====--
function upload_dir(){
	$dir = $_SERVER['PHP_SELF'];
	for($i=0;$i<strlen($dir);$i++){
		if(substr($dir,$i,1)=="/") $slashpos=$i;
	}
	$dir = substr($dir,0,$slashpos);
	$dir = $_SERVER['DOCUMENT_ROOT'].$dir."/files/";
	return($dir);
}
function getimgplace($ext){
	$dir=$_SERVER['HTTP_HOST'];
	$dir="http://$dir";
	$tdir=$_SERVER['PHP_SELF'];
	for($i=0;$i<strlen($tdir);$i++){
		if(substr($tdir,$i,1)=="/") $slashpos=$i;
	}
	$tdir = substr($tdir,0,$slashpos);
	$dir=$dir.$tdir."/files/$ext".$_FILES['userfile']['name'];
	return($dir);
}
function makeindex($dfile){
	$h = fopen($dfile,"w");
	fwrite($h, "".$_SERVER['REMOTE_ADDR'].";  ".date(r)."GMT"  );
	fclose($h);
	return("");
}
?> 
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