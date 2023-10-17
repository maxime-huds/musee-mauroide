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
                    <img src="./images/Alain_Verse.png" class="card-img-top" alt="Alain Verse's Photo">
                    <div class="card-body">
                        <h5 class="card-title">Alain Verse</h5>
                        <p class="card-text">Museum Researcher</p>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Badges</h5>
                            <ul class="list-group">
                            <li class="list-group-item">Badge 1 - 9:15h</li>
                                <li class="list-group-item">Badge 2 - 12:37h</li>
                                <li class="list-group-item">Badge 3 - 12:57h</li>
                                <li class="list-group-item">Badge 4 - 20:53h</li>
                                <li class="list-group-item">Badge 5 - 00:53h</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <img src="plan_musee.png" class="card-img-top" alt="Museum Plan">
                    <div class="card-body">
                        <h5 class="card-title">Museum Plan</h5>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Research Documents</h5>
                            <p class="card-text">Click on the links to download the documents.</p>
                            <a href="document1.pdf" class="btn btn-primary">Confidential research 1</a>
                            <a href="document2.pdf" class="btn btn-primary">Confidential research 2</a>
                            <!-- Add other document links here if needed -->
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
