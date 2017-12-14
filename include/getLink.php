<?php   
if (isset($_GET['file'])) { 
    $file = $_GET['file'] ;
        if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file))  { 
            header('Content-type: application/mp3');  
            header("Content-Disposition: attachment; filename=\"$file\"");   
            readfile($file); 
        } 
    } else { 
    header("HTTP/1.0 404 Not Found"); 
    echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>"; 
} 
?>