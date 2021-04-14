<html>

<head>
    <title>
        Nuclear Power || Moderators
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuclear.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid gx-0">
        <div class="row modCover">
            <img src="https://media.wired.com/photos/5e1f8b7e1bba420008293b1f/master/w_2560%2Cc_limit/Science_GermanynuclearTA_GettyImages-1092370410-copy.jpg" class="img-fluid">
            <div class="text-center coverText display-6">
                <h1 class="display-4 fw-bold">Moderator Types</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, praesentium!</p>
            </div>
        </div>
    </div>
    <div class="container-fluid gx-0">
        <div class="modCards text-center">
            <div class="d-flex flex-row justify-content-center mx-4">
                <!-- first card -->
                <div class="card mx-2">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">Graphite</h5>
                        </div>
                        <p class="gen-text card-text">
                            A graphite-moderated reactor is a nuclear reactor that uses carbon as a neutron moderator, which allows natural uranium to be used as nuclear fuel.
                        </p>
                        <div class="card-link">
                            <a href="#" class="btn btn-dark">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- second card -->
                <div class="card mx-2">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">PWD</h5>
                        </div>
                        <p class="gen-text card-text">
                            The light-water reactor (LWR) is a type of thermal-neutron reactor that uses normal water, as opposed to heavy water, as both its coolant and neutron moderator
                        </p>
                        <div class="card-link">
                            <a href="#" class="btn btn-dark">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- third card -->
                <div class="card mx-2">
                    <div class="card-body">
                        <div class="title">
                            <h5 class="card-title">PHWR</h5>
                        </div>
                        <p class="gen-text card-text">
                            A pressurized heavy-water reactor (PHWR) is a nuclear reactor that uses heavy water (deuterium oxide D2O) as its coolant and neutron moderator.
                        </p>
                        <div class="card-link">
                            <a href="#" class="btn btn-dark">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Moderator main content -->
    <section>
        <div class="flex-row mx-2">
            <div class="modCover02">
            </div>
        </div>
        <!-- Graphite Section -->
        <div class="row text-center m-4">
            <h2>Graphite Moderators</h2>
        </div>
        <div class="row mx-2">
            <div class="col-lg-4 col-sm-12 modImage">
                <img src="img/Elektrownia_Ignalina_graphite.jpg" class="img-fluid shadow-lg">
            </div>
            <div class="col-lg-6 col-sm-12 gen-text">
                <p>By using a minimalist design that used regular (light) water for cooling and graphite for moderation, it was possible to use natural uranium for fuel (instead of the considerably more expensive enriched uranium). This allowed for an extraordinarily large and powerful reactor that was also cheap enough to be built in large numbers and simple enough to be maintained and operated by local personnel. For example, the RBMK reactors at the Ignalina Nuclear Power Plant in Lithuania were rated at 1500 MWe each, a very large size for the time and even for the early 21st century.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 gen-text">
                <p>Reactor hall of the RBMK-1500 at Ignalina Nuclear Power Plant, Lithuania – the upper biological shield (UBS) lies several meters below the floor of the reactor hall. There are no channel covers on the fuel channels of the reactor; the control rod drives are below the colored covers.</p>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="img/RBMK_reactor_from_Ignalina_ArM_graphite_02.jpg" class="img-fluid w-100">
            </div>
        </div>
        <div class="row">
            <!-- Graphite Accordion -->
            <div class="col-lg-8 col-sm-12">
                <div class="accordion" id="graphiteAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#graphiteAccordion">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#graphiteAccordion">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#graphiteAccordion">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Water Section -->
        <div class="row text-center">
            <h2>PWR: Pressurized Water Reactors</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 modImage">
                <img src="img/Diablo_canyon_PWR.jpg" class="img-fluid">
            </div>
            <div class="col-lg-8 col-sm-12 gen-text">
                <p>These reactors use a pressure vessel to contain the nuclear fuel, control rods, moderator, and coolant. The hot radioactive water that leaves the pressure vessel is looped through a steam generator, which in turn heats a secondary (nonradioactive) loop of water to steam that can run turbines. They represent the majority (around 80%) of current reactors.The Diablo Canyon Power Plant is an electricity-generating nuclear power plant near Avila Beach in San Luis Obispo County, California. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <p>The use of water as a moderator is an important safety feature of PWRs, as an increase in temperature may cause the water to expand, giving greater 'gaps' between the water molecules and reducing the probability of thermalization — thereby reducing the extent to which neutrons are slowed and hence reducing the reactivity in the reactor. Therefore, if reactivity increases beyond normal, the reduced moderation of neutrons will cause the chain reaction to slow down, producing less heat. This property, known as the negative temperature coefficient of reactivity, makes PWR reactors very stable. This process is referred to as 'Self-Regulating', i.e. the hotter the coolant becomes, the less reactive the plant becomes, shutting itself down slightly to compensate and vice versa. Thus the plant controls itself around a given temperature set by the position of the control rods.</p>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="img/PWR_nuclear_core.jpg" class="card-img-top img-fluid" alt="nuclear_core">
                    <div class="card-body">
                        <p class="card-text">Nuclear Core Showing Cherinkov Radiation (Blue Light)</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Heavy Water Section-->
        <div class="row text-center">
            <h2>PHWR: Pressurized Heavy Water Reactors</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 modImage">
                <img src="img/CANDU_at_Qinshan_PHWR.jpg" class="img-fluid">
            </div>
            <div class="col-lg-8 col-sm-12 gen-text">
                <p> PHWRs frequently use natural uranium as fuel, but sometimes also use very low enriched uranium. The heavy water coolant is kept under pressure to avoid boiling, allowing it to reach higher temperature (mostly) without forming steam bubbles, exactly as for pressurized water reactor. While heavy water is very expensive to isolate from ordinary water (often referred to as light water in contrast to heavy water), its low absorption of neutrons greatly increases the neutron economy of the reactor, avoiding the need for enriched fuel.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="img/heavy_water_sample.jpg" class="card-img-top img-fluid" alt="heavy_water">
                    <div class="card-body">
                        <p class="card-text">An Histprical sample of "Heavy Water"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <p>One complication of this approach is the need for uranium enrichment facilities, which are generally expensive to build and operate. They also present a nuclear proliferation concern; the same systems used to enrich the 235U can also be used to produce much more "pure" weapons-grade material (90% or more 235U), suitable for producing a nuclear weapon. This is not a trivial exercise by any means, but feasible enough that enrichment facilities present a significant nuclear proliferation risk.</p>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
