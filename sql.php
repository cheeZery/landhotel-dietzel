<?php
	
	$mysqlhost = "db449510984.db.1and1.com:3306";
	$mysqluser = "dbo449510984";
	$mysqlpwd = "dietzel$";
	$mysqldb = "db449510984";
	
	// $connection = mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die(mysql_error());
	// 
	// mysql_select_db($mysqldb, $connection) or die(mysql_error());
	// 
	// echo "sql:<br>";
	// $sql_query = "SELECT * FROM tabTyp";
	// 
	// $result = mysql_query($sql_query) or die(mysql_error());
	// 
	// echo "ausgabe:<br>";
	// while($row = mysql_fetch_array($result)) {
	// 	 echo $row[0]."<br>";
	// 	 echo $row[1]."<br>";
	// 	 echo $row[2]."<br>";
	// }
	// echo "ende.<br>";
	
	if (!mysql_connect($mysqlhost, $mysqluser, $mysqlpwd)) {
		echo 'Konnte nicht zu mysql verbinden';
		exit;
	}

	$sql = "SHOW TABLES FROM ".$mysqldb;
	if(!($result = mysql_query($sql))) {
		echo "DB Fehler, konnte Tabellen nicht auflisten\n";
		echo 'MySQL Fehler: ' . mysql_error();
		exit;
	}
	while ($row = mysql_fetch_row($result)) {
		echo "Tabelle: ".$row[0]."<br>";
	}

	mysql_free_result($result);
	
	$test = "testssss";
	
?>
test
<?= $test ?>
test