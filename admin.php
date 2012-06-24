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
        <td width="4%" valign="top">
		
		
		<?php
		
		include("links.html");
		?>		</td>
        <td width="96%" align="left" valign="top"><table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
          <tr class="yellow">
            <td><p class="text_black_huge">Administrative Area </p>
              <p>Please Login </p></td>
          </tr>
          <tr>
            <td><form id="form1" name="form1" method="post" action="video/YImpoExpo.php">
              <label>Username
                <input name="username" type="text" class="menu" id="username" size="25" maxlength="255" />
                </label>
              <p>
                <label>Password
                <input name="password" type="password" class="menu" id="password" size="25" maxlength="255" />
                </label>
              </p>
              <p>
                <label>
                <input name="Submit" type="submit" class="menu" value="Login" />
                </label>
                <label>
                <input name="Submit2" type="reset" class="menu" value="Reset" />
                </label>
              </p>
            </form>
            </td>
          </tr>
          
        </table>          
          <p align="justify" class="text_black_huge">&nbsp;</p>
          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white">Copyright @ Rohit</td>
  </tr>
</table>
</body>
</html>
