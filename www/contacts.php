<?php
 include("blocks/bd.php");
$result=mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE id=4 ",$db);
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
    
      <?php echo $myrow['text'];?>
    
    </td>
  </tr>
 <?php include("blocks/down.php"); ?>
</table>
</body>
</html>