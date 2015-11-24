<?php ob_start();include("lock.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Добавить урок</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <?php include("blocks/header.php"); ?>
  <?php include("blocks/left.php"); ?>
  <td width="649" align="left" valign="middle" class="main_border">
    <form action="add_lesson.php" method="post" name="form1" id="form1">
     <p> <label for="title">Введите название урока:<br>
     </label>
      <input name="title" type="text" id="title" value=""></p>
     <p>
       <label for="author">Введите краткое описание урока:<br>
       </label>
       <input type="text" name="meta_d" id="meta_d">
     </p>
     <p>Введите ключевые слова:<br>
       <input type="text" name="meta_k" id="meta_k">
     </p>
     <p>Введите дату:<br>
<input type="date" name="date" id="date">
     </p>
     <p>Введите краткое описание урока с тегами абзацев:<br>
       <textarea name="description" cols="60" rows="6" id="description"></textarea>
     </p>
     <p>Введите полный текст урока с тегами абзацев:<br>
       <textarea name="text" cols="80" rows="8" id="text"></textarea>
     </p>
     <p>Введите автора урока:<br>
<input type="text" name="author" id="author">
     </p>
     <p>
               <input type="submit" name="submit" id="submit" value="Занести урок в базу">
     </p>
     <p>&nbsp;</p>
    </form>
    <p></p>
    <p>&nbsp;</p>
    <p>
    </td>
  </tr>
  
  
<?php include("blocks/down.php"); ?>
</table>
</body>
</html>