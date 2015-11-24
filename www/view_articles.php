<?php
 include("blocks/bd.php");
  if(isset($_GET['id'])) {$id=$_GET['id'];}
$result=mysql_query("SELECT * FROM articles WHERE id='$id' ",$db);
$myrow=mysql_fetch_array($result);
?>
<!doctype html>
<meta name="description" content="<?php echo $myrow['meta_d'];?> ">
<meta name="keywords" content="   <?php echo $myrow['meta_k'];?>">
<html>
<head>
<meta charset="utf-8">
<title>  <?php echo $myrow['title'];?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <tr>
    <td width="649" height="600" valign="top" class="main_border">
    	<p class="view_title"><?php echo $myrow['title'];?></p>
        <p class="view_date">Дата добавления: <?php echo $myrow['date'];?></p>
        <p class="view_date">Автор: <?php echo $myrow['author'];?></p>
        
      <p><?php echo $myrow['text'];?></p>
 
    <p>&nbsp;</p></td>
  </tr>
 <?php include("blocks/down.php"); ?>
</table>
</body>
</html>