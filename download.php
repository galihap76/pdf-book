<?php 
    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];

    $back_dir    ="assets/";
    $file = $back_dir.$_GET['filename'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('HTTP/1.1 200 Ok');
            header('Content-Encoding: identity');
            header("Content-type: application/pdf");
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } 
        else {
           header('HTTP/1.1 404 Not found');
           echo ("file $file not found");
           exit;
        }
    }
?>
