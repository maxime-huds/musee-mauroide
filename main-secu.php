<?php
$a = session_id(); if(empty($a)) session_start();
include "verif.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil d'Alain Verse</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="photo_alain.jpg" class="card-img-top" alt="Photo d'Alain Verse">
                    <div class="card-body">
                        <h5 class="card-title">Vincent Tim</h5>
                        <p class="card-text">Responsable de la Sécurité</p>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Badges</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Badge 1 - Date/heure</li>
                                <li class="list-group-item">Badge 2 - Date/heure</li>
                                <!-- Ajoutez ici d'autres badges au besoin -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <img src="plan_musee.jpg" class="card-img-top" alt="Plan du musée">
                    <div class="card-body">
                        <h5 class="card-title">Plan des caméras</h5>
                        <p class="card-text">Cliquez sur l'image pour agrandir.</p>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Documents de Recherche</h5>
                            <p class="card-text">Cliquez sur les liens pour télécharger les documents.</p>
                            <a href="document1.pdf" class="btn btn-primary">Télécharger Document 1</a>
                            <a href="document2.pdf" class="btn btn-primary">Télécharger Document 2</a>
                            <!-- Ajoutez ici d'autres liens vers des documents au besoin -->
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
