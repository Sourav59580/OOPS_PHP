<?php
$response = [];
$file = ($_FILES['data']);
for ($i = 0; $i < count($file['name']); $i++) {
    $filename = $file['name'][$i];
    $tmp = $file['tmp_name'][$i];
    $fileDetails = pathinfo($filename);
    if ($fileDetails['extension'] == 'jpg' || $fileDetails['extension'] == 'jpeg' || $fileDetails['extension'] == 'png' || $fileDetails['extension'] == 'gif' || $fileDetails['extension'] == 'webp') {
        if (move_uploaded_file($tmp, "result/" . $filename)) {
            array_push($response, $filename . " Uploaded");
        }
    } else {
        array_push($response, $filename . " Not Uploaded");
    }
}

echo json_encode($response);
