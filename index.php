<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The NewsPaper</title>
    <link rel="stylesheet" href="style.css">

    <!-- icons library -->
    <script src="https://kit.fontawesome.com/a980e88be8.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- header -->
    <header>
        <div class="menu-logo">
            <a href="#" class="logo"><h2>The NewsPaper</h2></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">Business</a></li>
            </ul>
        </div>
    </header>
    <!-- header -->

    <!--  -->

    <!-- Bootstrap Carousel (Slider) with Automatic Slide -->
    <div id="newsCarousel" class="carousel slide" data-ride="carousel" style="max-width: 600px; margin: 0 auto;">
        <ol class="carousel-indicators">
            <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#newsCarousel" data-slide-to="1"></li>
            <li data-target="#newsCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/news1.jpg" alt="News 1" style="max-height: 300px;">
                <div class="carousel-caption">
                    <h3>Discover César</h3>
                    <p> the fascinating story of Julius Caesar .</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/news2.jpg" alt="News 2" style="max-height: 300px;">
                <div class="carousel-caption">
                    <h3>Immerse yourself</h3>
                    <p>he world of French cinema</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://public.iutenligne.net/decouverte-iut/activite_amphi/PRES/part2/res/img_intro.png" alt="News 3" style="max-height: 300px;" >
                <div class="carousel-caption">
                    <h3>New building of the naza</h3>
                    <p>Welcome to Mars.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Bootstrap Carousel (Slider) with Automatic Slide -->

    <!-- News Articles Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- News Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/news1.jpg" class="card-img-top" alt="News 4">
                    <div class="card-body">
                        <h5 class="card-title">Cesar is back</h5>
                        <p class="card-text">Discover the fascinating story of Julius Caesar at our exclusive exhibition! Artefacts, sculptures and rare documents transport you into the life of this illustrious Roman leader. From 10/10/2023 to 18/10/1024 at the Museum of Ancient History. Free admission</p>
                        <a href="cesar.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/img1.jpg" class="card-img-top" alt="News 5">
                    <div class="card-body">
                        <h5 class="card-title">Murder at "Musée mauroide"</h5>
                        <p class="card-text">Investigation underway at the "mauroide Museum” following a shocking murder. Police are working to solve this mystery. Stay informed for updates on this disturbing case.</p>
                        <a href="museum.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/news2.jpg" class="card-img-top" alt="News 6">
                    <div class="card-body">
                        <h5 class="card-title">Césars Ceremony</h5>
                        <p class="card-text">Immerse yourself in the world of French cinema at the Césars Ceremony! Discover the winners, the stars, and the notable moments. Follow the evening live on 12/23/2023 on TV4. A celebration of French cinematographic talent!</p>
                        <a href="ceremony.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of News Articles Section -->

    <!-- News Articles Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- News Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://public.iutenligne.net/decouverte-iut/activite_amphi/PRES/part2/res/img_intro.png" class="card-img-top" alt="News 4">
                    <div class="card-body">
                        <h5 class="card-title">NASA building</h5>
                        <p class="card-text">The journey to March continues with the new “IUT tosterone” building.</p>
                        <a href="iut.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/news5.png" class="card-img-top" alt="News 5" >
                    <div class="card-body">
                        <h5 class="card-title">Political Developments</h5>
                        <p class="card-text">Government announces new policies aimed at economic growth.</p>
                        <a href="political.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="images/news6.jpg" class="card-img-top" alt="News 6">
                    <div class="card-body">
                        <h5 class="card-title">SuperMan</h5>
                        <p class="card-text">Major corporation plans to expand operations globally.</p>
                        <a href="manpage.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of News Articles Section -->

</body>
</html>
