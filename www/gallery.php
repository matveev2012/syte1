<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			$("a#photo").fancybox(
			{
				transitionIn:'elastic',
				transitionOut:'elastic' ,
				speedIn:'500',
				speedOut:'500'
			}
			
			);
			});
</script>
</head>
<body>
<table width="900" height="489" border="0px" align="center" cellpadding="0" cellspacing="0" class="main_border" bgcolor="#FFFFFF">
  <tr>
    <td colspan="2">
   <a href=index.php> <img src="img/samara2.jpg" align="center" valign="top" width="1100" height="400" alt="картинка"/> </a>	 

    </td>
  </tr>
  
  
  
  
  
  
  
  <tr>
    <td width="649" height="600" valign="top" class="main_border">
  <div class="post_title"><h2><p align="center"> <font size="30" face="Times new roman">Галерея</font></p></h2></div>
	  <div class="gallery">
	<a id="photo" rel="gallery" class="photo" href=gallery_img/big/1.jpg> <p align=center> <img src="gallery_img/small/1.jpg" width="150" height="100" alt=""/></a>
	 <a id="photo" rel="gallery" class="photo" href=gallery_img/big/3.jpg> <img src="gallery_img/small/3.jpg" width="150" height="100" alt="photo"/></a>
	  <a id="photo" class="photo" rel="gallery"  href=gallery_img/big/4.jpg><img src="gallery_img/small/4.jpg" width="150" height="100" alt="photo"/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/5.jpg> <img src="gallery_img/small/5.jpg" width="150" height="100" alt="photo"/></a>
	  <a id="photo" class="photo" rel="gallery" href=gallery_img/big/6.jpg>  <img src="gallery_img/small/6.jpg" width="150" height="100" alt="photo"/></a>
	  <a id="photo"   class="photo" rel="gallery" href=gallery_img/big/7.jpg>	 <img src="gallery_img/small/7.jpg" width="150" height="100" alt="photo"/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/8.jpg> <p align=center> <img src="gallery_img/small/8.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/9.jpg> <img src="gallery_img/small/9.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/10.jpg> <img src="gallery_img/small/10.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/11.jpg> <img src="gallery_img/small/11.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/12.jpg> <img src="gallery_img/small/12.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/13.jpg> <img src="gallery_img/small/13.jpg" width="150" height="100" alt=""/></a>
	  <a id="photo" rel="gallery" class="photo" href=gallery_img/big/14.jpg> <img src="gallery_img/small/14.jpg" width="150" height="100" alt=""/></a>
	 <a id="photo" rel="gallery" class="photo" href=gallery_img/big/15.jpg> <img src="gallery_img/small/15.jpg" width="150" height="100" alt=""/></a>
	 <a id="photo" rel="gallery" class="photo" href=gallery_img/big/16.jpg> <img src="gallery_img/small/16.jpg" width="150" height="100" alt=""/></a>
	 <a id="photo" rel="gallery" class="photo" href=gallery_img/big/17.jpg> <img src="gallery_img/small/17.jpg" width="150" height="100" alt=""/></a>
	   <a id="photo" rel="gallery" class="photo" href=gallery_img/big/18.jpg> <img src="gallery_img/small/18.jpg" width="150" height="100" alt=""/></a>
	   <a id="photo" rel="gallery" class="photo" href=gallery_img/big/19.jpg> <img src="gallery_img/small/19.jpg" width="150" height="100" alt=""/></a>
	  
	  
	  </td>
  </tr>
 <?php include("blocks/down.php"); ?>
</table>
</body>