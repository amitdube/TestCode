<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
table.menu {
	font-size:100%;
	position:absolute;
	visibility:hidden;
	width: 177px;
	background-color: #E5E5E5;
}
-->
</style>


<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center"><span class="yellow">
  <?php
			include("top.html");

		?>
  </span>
</div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow">
      <?php
			include("../dropdown.html");
		?>  </td>
  </tr>
  <tr>
    <td><img src="left_black_01.jpg" width="235" height="250" /><img src="left_black_02.jpg" width="269" height="250" /><img src="left_black_03.jpg" width="246" height="250" /></td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td valign="top">
		
		
		<p>
		  <?php
		
		//include("links.html");
		?>
		</p>
		<p>&nbsp;		  </p>
		<?php 	
echo '<h2>TUTORIALS</h2>'; 

			
			
	?></td>
        <td valign="top"><p align="justify" class="text_black_huge">&nbsp;</p>
         


<?php
error_reporting(0);

include("demo.php");

$ur2 = $_GET[value1];
echo "<h4>$ur2</h4>";
						
			$Query="SELECT * from youtube where area = '$ur2' order by area ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
			{
			
				while($row=mysql_fetch_row($dbresult))
				{
				echo "
					
					<ul>
					
					<li>
				
					
					 <a href=\"post2.php?value2=$row[0]\">$row[2]</a>
					
				

                </li>
               </ul>
			   
			   ";	
					
				
		
					
				}
				
			}









$url = $_GET[value2];

//echo $url;

$url = $url . '<script>alert("hi");</script>&feature=related';
 
// Grab video_id, we only want a-zA-Z0-9
preg_match('!v=([a-zA-Z0-9-_]*)!', $url, $matches); 
echo '<object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/' . $matches[1] . '&hl=en"></param><embed src="http://www.youtube.com/v/' . $matches[1] . '&hl=en" type="application/x-shockwave-flash" width="425" height="344"></embed></object>';



?>
<h3> play tutorials</h3>
<br />
<br />
 <a href="post2.php?value1=Bio">go back to  Bio videos</a><br />
 <a href="post2.php?value1=Computer">go back to Computer videos</a><br />
 <a href="post2.php?value1=Civil">go back to Civil videos</a><br />
<br/>
<a href  = "video.php">go back to Main subject area</a>

</p>          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white">Copyright @ Rohit </td>
  </tr>
</table>
</body>
</html>

 