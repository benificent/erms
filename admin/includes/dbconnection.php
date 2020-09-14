<?php
$link = mysqli_connect("Localhost", "root", "", "ermsdb");
if (mysqli_connect_errno()) {
    echo "Error connecting to Database:-> " . mysqli_connect_error();
}

$JSONResponse =
    [
        'success' => [
            'code' => 200,
            'message' => "Successfully added new record!"
        ],
        'error' => [
            'code' => 500,
            'message' => "Error: " . mysqli_error($link) . ": Fill the right way and TRY AGAIN"
        ],
        'duplicate' => [
            'code' => 1062,
            'message' => "The email already exist"
        ]
    ];