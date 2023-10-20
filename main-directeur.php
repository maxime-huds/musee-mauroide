<?php
$a = session_id(); if(empty($a)) session_start();
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
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="chat-container">
                                <div class="message">
                                    <p><strong>Alain Verse :</strong> I'm going to be late Nibag is not well...</p>
                                </div>
                                <div class="message">
                                    <p><strong>Frédéric Tus :</strong> No problem, keep me posted</p>
                                </div>
                                <div class="message">
                                    <p><strong>Frédéric Tus :</strong> Why did you sign in so late?</p>
                                </div>
                                <!-- Ajoutez plus de messages ici -->
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Écrivez un message...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Envoyer</button>
                                </div>
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
                            <h5 class="card-title">List of Employees</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Vincent Tim - Security Manager - 3euro</li>
                                <li class="list-group-item">Christophe Talmot - Cleaning - Mi0p3</li>
                                <li class="list-group-item">Agnès Pagne - Cleaning - C0UCH3</li>
                                <li class="list-group-item">Brigitte Thamps - Guide - C4R4v4N3</li>
                                <li class="list-group-item">Jean-Marc Eupaje - Accountant - D0CK3R_I_M4rch3_p4s</li>
                                <li class="list-group-item">Nicolas Teral - Curator - kw4k0ub3</li>
                                <li class="list-group-item">Alain Verse - Museum Researcher - alendroit</li>  
                                <li class="list-group-item">Frédéric Tus - Director - admin</li>                            
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
