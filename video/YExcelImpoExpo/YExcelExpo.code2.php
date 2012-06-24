<?php
  include("../db.inc.php");
  $rs=mysql_query("select * from ".$tableName);
  for($i=0;$i < mysql_num_fields($rs);$i++) { $header.=mysql_field_name($rs, $i).','; }
  while($rw=mysql_fetch_row($rs))
  {
    $line = "";
    foreach($rw as $value)
    {
      if(!isset($value) || $value == "") $value = "\"\",";
      else { $value = str_replace('"', '""', $value); $value = '"' . $value . '"' . ","; } $line .= $value;
    }
    $data .= trim($line)."\n";
  }
  if ($data == "") $data = "\nno matching records found\n";
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=".$tableName.".csv");
  header("Pragma: no-cache");
  header("Expires: 0");
	echo $header."\n".$data; //<!->