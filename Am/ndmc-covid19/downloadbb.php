<?php
     $fileName = 'Evidence Brief_COVID 19_Intervention_Options.pdf';
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
