<?php
function displayImages($dir) {
    $files = scandir($dir);

    if ($files !== false) {
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $path = $dir . $file;
                echo '<img src="' . $path . '" alt="Image">';
            }
        }
    }
}
