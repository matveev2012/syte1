<?php
 include("blocks/bd.php");
$result=mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE id=1 ",$db);
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
<table width="1100" height="1100" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
<?php /*?>  <?php include("blocks/left.php"); ?><?php */?>
  <td width="1100 valign="top" class="main_border" align="center">
  <?php echo $myrow['text'];?>
  </td>
  
  
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>