<?php
// configuration
include('conn.php');
$a=0;
// query
$sql = "UPDATE status_case
        SET stat=?
		WHERE stat=1";
$q = $db->prepare($sql);
$q->execute(array($a));
header("location: ephi.php");
?>
