<?php
$a = session_id(); if(empty($a)) session_start();
include "verif.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile of Frédéric Tus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/frederic_tus.png" class="card-img-top" alt="Frédéric Tus's Photo">
                    <div class="card-body">
                        <h5 class="card-title">Frédéric Tus</h5>
                        <p class="card-text">Museum Director</p>
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
                            <h5 class="card-title">List of Employees</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Alain Verse - Museum Researcher</li>
                                <li class="list-group-item">Vincent Tim - Security Manager</li>
                                <li class="list-group-item"></li>
                            </ul>
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
