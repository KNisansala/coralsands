<?php

include '../../include.php';

if (isset($_POST['Slider'])) {

    $slider = new Slider();

    $details = $slider->getById($_POST['SliderId']);

    $result = $slider->deleteById($_POST);

    if ($result) {
        unlink('../../images/slider/' . $details['image_name']);
    }

    header('Content-type: application/json');
    echo json_encode(['status' => $result]);
    exit();
}


