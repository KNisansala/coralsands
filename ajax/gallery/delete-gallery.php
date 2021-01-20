<?php

include '../../include.php';

if (isset($_POST['Gallery'])) {

    $gallery = new Gallery();

    $image = $gallery->getById($_POST['Id']);
    
    $delete = $gallery->deleteById($_POST);

    if ($delete) {
        unlink('../../images/gallery/' . $image['image_name']);
        unlink('../../images/gallery/thumb/' . $image['image_name']);
    }

    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}

