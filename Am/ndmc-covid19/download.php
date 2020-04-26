<?php
$id=$_POST['aa'];
include('conn.php');
$result = $db->prepare("SELECT * FROM report where Rep_id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    $fileName = $row['file'];
    $directory='file';
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$directory.'/'.$fileName);
        header('Content-Length: '.filesize($directory.'/'.$fileName));
        ob_clean();
        flush();
        readfile($directory.'/'.$fileName);
        echo 'ok';
        header("location: situationreport.php");
    }

?>
