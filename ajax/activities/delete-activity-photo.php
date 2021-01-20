<?php

include '../../include.php';

if (isset($_POST['ActivityPhoto'])) {

    $activityPhoto = new ActivityPhotos();

    $image = $activityPhoto->getById($_POST['ID']);

    $delete = $activityPhoto->deleteById($_POST);

    if ($delete) {
        unlink('../../images/activities/photos/' . $image['image_name']);
        unlink('../../images/activities/photos/thumb/' . $image['image_name']);
    }

    header('Content-type: application/json');
    echo json_encode(['status' => $delete]);
    exit();
}

