<?php 

$file = 'somefile.txt';

if(!$file)
{
    // File doesn't exist, output error
    die('file not found');
}
else
{
    // Set headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    //header("Content-Type: application/zip");
    header("Content-Type: text/plain");
    header("Content-Transfer-Encoding: binary");

    // Read the file from disk
    readfile($file);
}

?>