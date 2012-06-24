<?php

	$db_username = "root";
	$db_password = "";
	$db_name = "test";
	$db_host = "localhost";
	$tableName="youtube"; // table will be used for import export

	$dbh=mysql_connect($db_host, $db_username, $db_password) or die ('You need to set your database connection in db.inc.php.</td></tr></table></body></html>');
	mysql_select_db($db_name) or die ('You need to set your database connection in db.inc.php.</td></tr></table></body></html>');
	