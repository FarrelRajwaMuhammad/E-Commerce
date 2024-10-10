<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css1/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Sign Out</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>

    <section id="categories">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <h2 class="Text-Cat mb-5">Your Menu</h2>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="/menu">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Sushi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Sashimi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Ramen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Udon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Bento</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Tempura</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Dessert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4">
                        <div class="card-wrapper text-center" style="width: 18rem;">
                            <a href="">
                                <div class="img-container d-flex justify-content-center mb-3">
                                    <img src="Assets/SushiFood.png" alt="Food" class="menu">
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="card-text">Drink</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
