<?php
    $base=$_POST['image'];
     $binary=base64_decode($base);
    header('Content-Type: bitmap; charset=utf-8');
    $file = fopen('Uploads/uploaded_image.jpg', 'wb');
    fwrite($file, $binary);
    fclose($file);
    echo 'success'; // Put JSON Response
?>