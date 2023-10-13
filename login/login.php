<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>

  <body>
    <div id="form" class="container-fluid">
      <div class="row pt-5">
        <form action="loginUser.php" class="col-md-5 mx-auto" method="post">
          <h1 class="text-center mb-4">Je me connecte</h1>

          <?php if(isset($_GET["message"])) : ?>
            <?php 
              $classMessage = isset($_GET["type"]) && $_GET["type"] === "success" ? "alert-success" : "alert-warning";
            ?>
            <div class="alert <?= $classMessage ?> alert-dismissible fade show" role="alert">
              <?=$_GET["message"];?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif ?>

          <div class="form-group mb-2">
            <input type="text" name="pseudo" class="form-control" placeholder="Entrez votre pseudo" required>
          </div>
          <div class="form-group mb-2">
            <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
          </div>
          <div class="form-group">
            <a href="register.php" class="btn btn-warning">Créer un compte</a>
            <input type="submit" value="Je me connecte" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
