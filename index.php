<?php
$images = file('image.txt', FILE_IGNORE_NEW_LINES);

if (empty($images)) {
    echo json_encode(['error' => 'No images available.']);
    exit();
}

$random_image = $images[array_rand($images)];
$response_data = ['url' => $random_image];
echo json_encode($response_data);
?>
