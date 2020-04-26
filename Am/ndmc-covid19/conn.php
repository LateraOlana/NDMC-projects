<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'ephi';
$db_pass		= 'mgeLndmC@06';
$db_database	= 'corona';

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
