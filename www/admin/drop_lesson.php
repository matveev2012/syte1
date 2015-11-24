<?php 
ob_start();
include("lock.php");
include("blocks/bd.php");
if(isset($_POST['id'])) {$id=$_POST['id'];}

 ?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Обработчик</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <?php include("blocks/left.php"); ?>
  <td width="649" align="left" valign="top" class="main_border">
    
    
    
    
    
   <?php 
   if(isset($id))
   {
	$result=mysql_query("DELETE FROM lesson WHERE id='$id' ");
	if($result == 'true')
	{echo "<p> Ваш урок успешно удален </p>";}
	else{echo "<p>Ваш урок не удален. </p>";}
	   
	   
	}
	else
	{
		
		echo "<p> Вы не выбрали урок</p>";
	
	}
   
   
   ?>
    </td>
  </tr>
  
  
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>