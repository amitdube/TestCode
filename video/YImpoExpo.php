<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ROHIT YOU-TUBE EXAMPLE</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<?php
			
				$username=$_POST['username'];
				$password=$_POST['password'];
				
			
				include("demo.php");
				
				$Query="SELECT * from admin where username='$username' and password='$password'";
				$dbresult=mysql_query($Query);
				if(mysql_num_rows($dbresult) >0)
				{					
				}
				
				else
				{
					echo "<p class=\"text_black\">Incorrect Username or password.</p>";
					exit();
				}
				
				?>

<?php	include("db.inc.php"); include("YExcelImpoExpo/YExcelImpo.code.php"); ?>
<form action="" method="post" enctype="multipart/form-data" name="frmProd" id="frmProd">

  <table width="100%" border="0">
    <tr>
      <td align="center" valign="middle"><h4>UPLOAD EXCEL FILE IN MSSQL FOR <strong>VIDEO </strong></h4></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><font color="#FF0000"><?php echo $errInfo; ?></font></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><font color="#0000FF"><?php echo $msgInfo; ?></font></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="left">
          <tr>
            <td align="right" width="25%">Upload File for <?php echo $tableName; ?></td>
            <td><input name="flvFile" type="file" id="flvFile"></td>
          </tr>
          <tr>
            <td align="right"><input name="chkDrop" type="checkbox" id="chkDrop" value="1" checked="checked">
              Drop Existing </td>
			   <?php
						echo "
						<input name=\"username\" type=\"hidden\" id=\"username\" value=\"$username\" />
                          <input name=\"password\" type=\"hidden\" id=\"password\" value=\"$password\" />";
						  
						  ?>
            <td><input name="subProd" type="submit" id="subProd" value="Upload File">
              &nbsp;&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="center"><hr><pre></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>