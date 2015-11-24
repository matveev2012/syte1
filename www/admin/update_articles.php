<?php 
ob_start();
include("lock.php");
include("blocks/bd.php");
if(isset($_POST['title'])) {$title=$_POST['title']; if($title==''){unset($title);};}
if(isset($_POST['meta_k'])) {$meta_k=$_POST['meta_k']; if($meta_k==''){unset($meta_k);};}
if(isset($_POST['meta_d'])) {$meta_d=$_POST['meta_d'];  if($meta_d==''){unset($meta_d);};}
if(isset($_POST['description'])) {$description=$_POST['description']; if($description==''){unset($description);};}
if(isset($_POST['text'])) {$text=$_POST['text'];  if($text==''){unset($text);};}
if(isset($_POST['date'])) {$date=$_POST['date']; if($date==''){unset($date);};}
if(isset($_POST['author'])) {$author=$_POST['author'];  if($author==''){unset($author);};}
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
   if(isset($title) && isset($meta_d) && isset($meta_k) && isset($description) && isset($text) && isset($date) && isset($author))
   {
	$result=mysql_query("UPDATE articles SET title='$title',meta_d='$meta_d',meta_k='$meta_k',date='$date',description='$description',text='$text',author='$author' WHERE id='$id' ");
	if($result == 'true')
	{echo "<p> Ваша статья успешно обновлена </p>";}
	else{echo "<p>Ваша статья не изменена. </p>";}
	   
	   
	}
	else
	{
		
		echo "<p> Вы ввели не всю информацию, статья не может быть обновлена.!</p>";
	
	}
   
   
   ?>
    </td>
  </tr>
  
  
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>