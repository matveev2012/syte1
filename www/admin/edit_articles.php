<?php ob_start();include("blocks/bd.php");
include("lock.php");
 if(isset($_GET['id'])) {$id=$_GET['id'];} 
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Редактировать статью</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <?php include("blocks/left.php"); ?>
  <td width="649" align="left"  valign="top" >
   
   
  <?php 
  
  if(!isset($id)){
  $result=mysql_query("SELECT title,id FROM articles");
  $myrow=mysql_fetch_array($result);
  do
  {
	printf("<p><a href='edit_articles.php?id=%s'>%s</a> ",$myrow["id"],$myrow["title"]);	
  }
  while($myrow=mysql_fetch_array($result));
  }
  else
  {
	  
	  
$result=mysql_query("SELECT * FROM articles WHERE id=$id");
$myrow=mysql_fetch_array($result);
print<<<HERE
 <form action="update_articles.php" method="post" name="form1" id="form1">
     <p> <label>Введите название статьи:<br>
     </label>
      <input value="$myrow[title]" name="title" type="text" id="title" value=""></p>
     <p>
       <label> Введите описание статьи:<br>
       </label>
       <input value="$myrow[meta_d]"type="text" name="meta_d" id="meta_d">
     </p>
     <p>Введите ключевые слова:<br>
       <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
     </p>
     <p>Введите дату:<br>
<input value="$myrow[date]" type="date" name="date" id="date">
     </p>
     <p>Введите краткое содержание статьи с тегами абзацев:<br>
       <textarea name="description" cols="60" rows="6" id="description">$myrow[description]</textarea>
     </p>
     <p>Введите полный текст статьи с тегами абзацев:<br>
       <textarea name="text" cols="80" rows="8" id="text">$myrow[text]</textarea>
     </p>
	 <p>
	 <input name="id" type="hidden" value="$myrow[id]">
	 </p>
     <p>Введите автора урока:<br>
<input value="$myrow[author]" type="text" name="author" id="author">
     </p>
     <p>
     <input type="submit" name="submit" id="submit" value="Сохранить изменения">
     </p>
     <p>&nbsp;</p>
    </form>
HERE;
	
	
	
	
	
	
	
	
	  
  }
  
  
  
  
  ?>
    </td>
  </tr>
  
  
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>