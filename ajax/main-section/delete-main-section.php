<?php

include '../../include.php';

if (isset($_POST['Section'])) {

    $mainsec = new MainSection();

    $image = $mainsec->getById($_POST['Id']);

    $delete = $mainsec->deleteById($_POST);

    if ($delete) {
        unlink('../../images/main-section/' . $image['image_name']);
    }

    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}