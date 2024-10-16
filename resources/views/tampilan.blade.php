<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
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
                            <a class="nav-link active" aria-current="page" href="/home">Your Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Sign Out</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>

    <section id="menu">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3">
                <h5>Filter Produk</h5>
                <select id="productFilter" class="form-select" aria-label="Filter by product type">
                    <option value="all">Semua Produk</option>
                    <option value="baju">T-shirt</option>
                    <option value="celana">Jeans</option>
                    <option value="hoodie">Hoodie</option>
                    <option value="jaket">Jacket</option>
                    <option value="aksesoris">Accessories</option>
                </select>
            </div>
            <div class="col-md-3">
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
