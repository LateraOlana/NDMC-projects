<?php
$id=$_POST['aa'];
include('conn.php');
$result = $db->prepare("SELECT * FROM guideline where Guid_id='$id'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    $fileName = $row['file'];
    $directory='galo';
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$directory.'/'.$fileName);
        header('Content-Length: '.filesize($directory.'/'.$fileName));
        ob_clean();
        flush();
        readfile($directory.'/'.$fileName);
        echo 'ok';
        header("location: situation_amharic.php");
    }

?>
