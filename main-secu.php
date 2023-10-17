<?php
$a = session_id(); if(empty($a)) session_start();
include "verif.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alain Verse's Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/Vincent_Tim.png" class="card-img-top" alt="Alain Verse's Photo">
                    <div class="card-body">
                        <h5 class="card-title">Vincent Tim</h5>
                        <p class="card-text">Security Manager</p>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Badges</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Badge 1 - 9h</li>
                                <li class="list-group-item">Badge 2 - 12h</li>
                                <li class="list-group-item">Badge 3 - 13h</li>
                                <li class="list-group-item">Badge 4 - 19h</li>

                                <!-- Add other badges here as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <img src="plan_musee_camera.png" class="card-img-top" alt="Museum Floor Plan">
                    <div class="card-body">
                        <h5 class="card-title">Camera Layout</h5>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div a class="card-body">
                            <h5 class="card-title">Camera Photos</h5>
                            <p class="card-text">Click on the links to download the documents.</p>
                            <a href="./images/caméra1.jpg" class="btn btn-primary">Download Document 1</a>
                            <a href="./images/caméra2.jpg" class="btn btn-primary">Download Document 2</a>
                            <a href="./images/caméra3.jpg" class="btn btn-primary">Download Document 3</a>
                            <a href="./images/caméra4.jpg" class="btn btn-primary">Download Document 4</a>
                            <a href="./images/caméra5.jpg" class="btn btn-primary">Download Document 5</a>
                            <a href="./images/caméra6.jpg" class="btn btn-primary">Download Document 6</a>
                            <!-- Add other links to documents here as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
