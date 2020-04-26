<?php
     $fileName = 'COVID19_outbreak_modeling_2020_04-06.pdf';
     $directory='amharic';
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$directory.'/'.$fileName);
        header('Content-Length: '.filesize($directory.'/'.$fileName));
        ob_clean();
        flush();
        readfile($directory.'/'.$fileName);
        echo 'ok';
        header("location: blank.php");

?>
