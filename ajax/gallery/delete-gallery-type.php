<?php

include '../../include.php';

if (isset($_POST['Type'])) {

    $gallerytype = new GalleryType();

    $delete = $gallerytype->deleteById($_POST);

    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}

