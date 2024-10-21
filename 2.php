<?php

$directory = 'images';
$files = scandir($directory);
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];

foreach ($files as $file) {
    $fileExtension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $imageExtensions))
    {
        $filePath = $directory . '/' . $file;
        echo '<img src="' . $filePath . '" alt="' . $file . '" style="max-width: 200px; margin: 10px;">';
    }
}
?>
