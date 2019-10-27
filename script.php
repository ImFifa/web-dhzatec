<?php

$images = glob("img/{*.jpg,*.png,*.jpeg}", GLOB_BRACE);

foreach($images as $i) {


    $fileName = explode(".", $i);
    $webpImage = $fileName[0] . '.webp';

    if ($fileName[1] === 'png')
        $image = imagecreatefrompng($i);
    else
        $image = imagecreatefromjpeg($i);

    // Save the image
    imagewebp($image, $webpImage);

    // Free up memory
    imagedestroy($image);

    echo $image . ' => ' . $webpImage . '<br>';
}
?>
