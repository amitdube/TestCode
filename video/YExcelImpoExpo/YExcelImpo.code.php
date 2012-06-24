<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if($_POST['subProd'])
	{
	  if($_POST['chkDrop']==1) mysql_query("delete from ".$tableName);
		require_once("YExcelImpoExpo/SEReader/reader.php");
		$totInserted=0; $data = new Spreadsheet_Excel_Reader(); $data->setOutputEncoding('CP1251');
		if($_FILES['flvFile']['tmp_name'])
		{
			$data->read($_FILES['flvFile']['tmp_name']);
			$rsTableFields=mysql_query("select * from ".$tableName." where 0");
			$totalNoOfFields=mysql_num_fields($rsTableFields);
			for ($i=2;$i<=$data->sheets[0]['numRows'];$i++)
			{
				$sSql="insert into ".$tableName." values (";
				$ft=mysql_fieldtype($rsTableFields,1);
			  if($ft=="int" || $ft=="real") $sSql.=mysql_real_escape_string($data->sheets[0]['cells'][$i][1])."'";
				else $sSql.="'".mysql_real_escape_string($data->sheets[0]['cells'][$i][1])."'";
				for ($j=2;$j<=$totalNoOfFields;$j++)
				{
				  $ft=mysql_fieldtype($rsTableFields,$j-1);
				  if($ft=="int" || $ft=="real") $sSql.=",".(mysql_real_escape_string($data->sheets[0]['cells'][$i][$j])+0)."";
				  else $sSql.=",'".mysql_real_escape_string($data->sheets[0]['cells'][$i][$j])."'";
				}
				$sSql.=")"; 
				if(mysql_query($sSql)) $totInserted++;
				else $errInfo.=mysql_error()." =>[Row ".$i."]<br>";
			}
		}
		else $errInfo.="Invalid file uploaded <br>";
		if($totInserted>0) $msgInfo=$totInserted." Row(s) Inserted";
		else $errInfo.="No Data Inserted";
	}//<] -->