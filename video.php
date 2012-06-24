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
		
		
		<?php
		
		include("links.html");
		?>		</td>
        <td valign="top"><p align="justify" class="text_black_huge">Pre-Defined Subjects</p>
          <ul>
            <li class="text_black_bold"> <a href="post2.php?value1=Bio">Bio</a> </li>
            <li class="text_black_bold"><a href="post2.php?value1=Computer">Computer</a></li>
            <li class="text_black_bold"><a href="post2.php?value1=Civil">Civil </a></li>
            </ul>
          <hr />
		  
		  
		  
          <?php 
		  
		  	
echo '<h2>VIDEO TUTORIALS</h2>'; 
include("demo.php");
						
			$Query="SELECT * from youtube order by area ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
			{
			
				while($row=mysql_fetch_row($dbresult))
				{
				$value1 = $row[0];

					echo "
					
					<ul>
					
					<li>
					$row[1] :-
					 <a href=\"post1.php?value1='.$value1.'\">$row[2]</a>
					 
					</li>
				

            
               </ul>
			   
			   
			   ";	
				
		
					
				}
					
			}
			
		
		  ?>
		  
		  
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
