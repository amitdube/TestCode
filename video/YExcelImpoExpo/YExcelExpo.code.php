<?php
	include("../db.inc.php");	include( "psxlsgen/psxlsgen.php" );	$myxls = new PhpSimpleXlsGen();
	function y_generate_excel()
	{
		global $myxls,$tableName;$i=0; $rsProd=mysql_query("select * from ".$tableName." limit 0,1");
		while($i<mysql_num_fields($rsProd))
		{ $meta = mysql_fetch_field($rsProd,$i); $myxls->WriteText_pos(0,$i,$meta->name); $i++;	}
	}
	y_generate_excel();	$myxls->SendFileY($tableName); //<!-- -->