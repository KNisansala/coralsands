<?php

include '../../include.php';

if (isset($_POST['Activities'])) {

    $activities = new Activities();

    $actPhoto = new ActivityPhotos();

    $getbyid = $activities->getById($_POST['Id']);

    $getbyactId = $actPhoto->getAllByActivityId($_POST['Id']);

    $details = $activities->deleteById($_POST);

    $photo = $actPhoto->deleteByActivityId($_POST['Id']);


    foreach ($getbyactId as $image) {

        unlink('../../images/activities/photos/' . $image['image_name']);
        unlink('../../images/activities/photos/thumb/' . $image['image_name']);
    }

    if ($details && $photo) {
        unlink('../../images/activities/' . $getbyid['image_name']);
        unlink('../../images/activities/thumb/' . $getbyid['image_name']);
    }



    header('Content-type: application/json');
    echo json_encode(['status' => $details]);
    exit();
}

