<?php
putenv('ORACLE_HOME=/oraclient');
$dbh = ocilogon('a0101002', 'crse1510', ' (DESCRIPTION =
	(ADDRESS_LIST =
	(ADDRESS = (PROTOCOL = TCP)(HOST = sid3.comp.nus.edu.sg)(PORT = 1521))
	)
	(CONNECT_DATA =
	(SERVICE_NAME = sid3.comp.nus.edu.sg)
	)
	)');
?>

