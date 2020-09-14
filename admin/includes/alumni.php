<?php
require_once "dbconnection.php";
$referer = $_SERVER['HTTP_REFERER'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $fullName = $_POST['fullname'];
    $address = $_POST['address'];
    $children = $_POST['childrenCount'];
    $relationship = $_POST['relationship'];
    $nationality = $_POST['nationality'];
    $position = $_POST['position'];
    $churchName = $_POST['churchName'];
    $churchCity = $_POST['churchCity'];
    $churchCountry = $_POST['churchCountry'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `alumni` (`id`, `title`, `fullname`, `address`, `email`, `children_count`, `relationship`, `nationality`,
                      `position`, `church_name`, `church_city`, `church_country`) 
                      VALUES (NULL, '$title', '$fullName', '$address', '$email', '$children', '$relationship', '$nationality',
                              '$position', '$churchName', '$churchCity', '$churchCountry')";
    if (mysqli_query($link, $sql)) {
        header('Content-Type: application/json');
        echo json_encode( $JSONResponse['success'] );
        } else{
            header('Content-Type: application/json');
            if (mysqli_errno($link)==1062)
                echo json_encode($JSONResponse['duplicate']);
            else
                echo json_encode($JSONResponse['error']);
        }
    mysqli_close($link);

}
