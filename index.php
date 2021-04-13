<html>

<head>
    <title>
        Workshop
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid gx-0">
        <?php include 'header.php'; ?>
        <div id="carouselIndex" class="carousel slide gx-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#indexIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#indexIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#indexIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Nu_Carousel01.jpg" class="d-block w-100" alt="nuclear_moderators">
                    <div class="carousel-caption">
                        <h1 class="display-2">Moderators</h1>
                        <h3>Nuclear Reactors: Cooling Systems</h3>
                        <a href="mods.php">
                        <button type="button" class="btn btn-outline-light btn-lg">Learn More</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Nu_Carousel02.jpg" class="d-block w-100" alt="global_nuclear_plants">
                    <div class="carousel-caption">
                        <h1 class="display-2">Designs</h1>
                        <h3>Nuclear Power: Global Nuclear Energy Trends</h3>
                        <a href="designs.php">
                        <button type="button" class="btn btn-outline-light btn-lg">Learn More</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Nu_Carousel03.jpg" class="d-block w-100" alt="nuclear_history">
                    <div class="carousel-caption">
                        <h1 class="display-2">History</h1>
                        <h3>Nuclear Discovery: Research and Development</h3>
                        <a href="history.php">
                            <button type="button" class="btn btn-outline-light btn-lg">Learn More</button>
                        </a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndex" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndex" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row index-welcome text-center">
            <div class="col-12">
                <h1 class="display-6">Nuclear Reactors: A Study</h1>
            </div>
            <div class="row">
                <div class="col-8 mx-auto p-3">
                    <p class="gen-text shadow rounded p-2">
                        A nuclear reactor, formerly known as an atomic pile, is a device used to initiate and control a fission nuclear chain reaction or nuclear fusion reactions.
                        Nuclear reactors are used at nuclear power plants for electricity generation and in nuclear marine propulsion.As of early 2019, the IAEA reports there are 454 nuclear power
                        reactors and 226 nuclear research reactors in operation around the world.
                    </p>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
