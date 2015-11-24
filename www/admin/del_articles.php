<?php
ob_start();
include("blocks/bd.php");
include("lock.php");
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Удалить статью</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <?php include("blocks/left.php"); ?>
  <td width="649" align="left"  valign="top" >
<p> <strong>Выберите статью для удаления:</strong></p>
<form action="drop_articles.php" method="post">   
  <?php 
  
  $result=mysql_query("SELECT title,id FROM articles");
  $myrow=mysql_fetch_array($result);
  do
  {
	printf("<p><input name='id' type='radio' value='%s'><label> %s</label></p>",$myrow["id"],$myrow["title"]);	
  }
  while($myrow=mysql_fetch_array($result));  

  ?>
  <p>
  <input name="submit" type="submit" value="Удалить статью">
  </p>
</form>
    </td>
  </tr>
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>