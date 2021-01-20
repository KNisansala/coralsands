<?php

include '../../include.php';

if (isset($_POST['Features'])) {

    $features = new RoomFeatures();
    
    $fea = $features->getById($_POST['Id']);

    $imgName = $fea["image_name"];
    unlink('../../images/features/' . $imgName);

    $delete = $features->deleteById($_POST['Id']);

    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}

