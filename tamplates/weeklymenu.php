<section id="menu" class="menu section mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-center-2">
                    <span>Menünk</span>
                    <p class="mt-20">Válasszon napot</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center pro-row">
            <div class="col-lg-9 m-auto col-12 text-center button-group">
                <ul class="nav nav-pills" id="pills-tab1-menu" role="tablist">
                    <li class="nav-item">
                        <a class="nav-menu active" id="pills-all-tab1-menu" data-toggle="pill" href="#pills-all1-menu" role="tab" aria-controls="pills-all1" aria-selected="true">Hétfő</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" id="pills-illustrations-tab1-menu" data-toggle="pill" href="#pills-busi-card1-menu" role="tab" aria-selected="false">Kedd</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu midl-btn" id="pills-logo-tab1-menu" data-toggle="pill" href="#pills-logo1-menu" role="tab" aria-selected="false">Szerda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" id="pills-web-tem-tab1-menu" data-toggle="pill" href="#pills-web-tem1-menu" role="tab" aria-selected="false">Csütörtök</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-menu last-btn" id="pills-flyer-tab1-menu" data-toggle="pill" href="#pills-flyer1-menu" role="tab" aria-selected="false">Péntek</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mx-0">
            <div class="col-lg-12 px-0">
                <div class="tab-content" id="pills-tabContent1">
                    <div class="tab-pane fade show active" id="pills-all1-menu" role="tabpanel" aria-labelledby="pills-all-tab1">
                        <div class="row work-cont-1">
                            <div class="col-lg-6">
                                <div class="work-image">
                                    <img src="images/my-photo/my-photo-8.jpeg" class="img-fluid" alt="breakfast">
                                    <h4 class="work-image__h4--pt">Hétfő</h4>
                                    <h6>2 fogás: 1350.-</h6>
                                    <h6>3 fogás: 1950.-</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 w">
                                <h6>2 fogás: 1350.-</h6>
                                <h6>3 fogás: 1950.-</h6>
                                <div class="work-cont">
                                    <?php foreach ($getmonday as $monday) : ?>
                                        <ul>
                                            <li class="mt-20">
                                                <h3><?php esc($monday["monday_name"]) ?></h3><span class="mobile-d-none">
                                                </span><em></em>
                                                <p><?php esc($monday["monday_characterization"]) ?></p>
                                            </li>
                                            <hr>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="sim-button button26 pogoSlider-slide-element mt-30" data-in="slideUp" data-out="flipX" data-duration="700">
                                    <a href="tel:+36309050101"><span>Hívás most</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-busi-card1-menu" role="tabpanel" aria-labelledby="pills-flyer-tab1">
                        <div class="row work-cont-2">
                            <div class="col-lg-6">
                                <div class="work-image">
                                    <img src="images/my-photo/my-photo-6.jpeg" class="img-fluid" alt="breakfast">
                                    <h4 class="work-image__h4--pt">Kedd</h4>
                                    <h6>2 fogás: 1350.-</h6>
                                    <h6>3 fogás: 1950.-</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 w">
                                <h6>2 fogás: 1350.-</h6>
                                <h6>3 fogás: 1950.-</h6>
                                <div class="work-cont">
                                    <?php foreach ($gettuesday as $tuesday) : ?>
                                        <ul>
                                            <li>
                                                <h3><?php esc($tuesday["tuesday_name"]) ?></h3><span class="mobile-d-none">
                                                </span><em></em>
                                                <p><?php esc($tuesday["tuesday_characterization"]) ?></p>
                                            </li>
                                            <hr>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="sim-button button26 pogoSlider-slide-element mt-30" data-in="slideUp" data-out="flipX" data-duration="700">
                                    <a href="tel:+36309050101"><span>Hívás most</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-logo1-menu" role="tabpanel" aria-labelledby="pills-flyer-tab1">
                        <div class="row work-cont-2">
                            <div class="col-lg-6">
                                <div class="work-image">
                                    <img src="images/my-photo/my-photo-5.jpeg" class="img-fluid" alt="breakfast">
                                    <h4 class="work-image__h4--pt">Szerda</h4>
                                    <h6>2 fogás: 1350.-</h6>
                                    <h6>3 fogás: 1950.-</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 w">
                                <h6>2 fogás: 1350.-</h6>
                                <h6>3 fogás: 1950.-</h6>
                                <div class="work-cont">
                                    <?php foreach ($getwednesday as $wednesday) : ?>
                                        <ul>
                                            <li>
                                                <h3><?php esc($wednesday["wednesday_name"]) ?></h3><span class="mobile-d-none">
                                                </span><em></em>
                                                <p><?php esc($wednesday["wednesday_characterization"]) ?></p>
                                            </li>
                                            <hr>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="sim-button button26 pogoSlider-slide-element mt-30" data-in="slideUp" data-out="flipX" data-duration="700">
                                    <a href="tel:+36309050101"><span>Hívás most</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-web-tem1-menu" role="tabpanel" aria-labelledby="pills-flyer-tab1">
                        <div class="row work-cont-2">
                            <div class="col-lg-6">
                                <div class="work-image">
                                    <img src="images/my-photo/my-photo-4.jpeg" class="img-fluid" alt="breakfast">
                                    <h4 class="work-image__h4--pt">Csütörtök</h4>
                                    <h6>2 fogás: 1350.-</h6>
                                    <h6>3 fogás: 1950.-</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 w">
                                <h6>2 fogás: 1350.-</h6>
                                <h6>3 fogás: 1950.-</h6>
                                <div class="work-cont">
                                    <?php foreach ($getthursday as $thursday) : ?>
                                        <ul>
                                            <li>
                                                <h3><?php esc($thursday["thursday_name"]) ?></h3><span class="mobile-d-none">
                                                </span><em></em>
                                                <p><?php esc($thursday["thursday_characterization"]) ?></p>
                                            </li>
                                            <hr>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="sim-button button26 pogoSlider-slide-element mt-30" data-in="slideUp" data-out="flipX" data-duration="700">
                                    <a href="tel:+36309050101"><span>Hívás most</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-flyer1-menu" role="tabpanel" aria-labelledby="pills-flyer-tab1">
                        <div class="row work-cont-2">
                            <div class="col-lg-6">
                                <div class="work-image">
                                    <img src="images/my-photo/bolonyai.jpeg" class="img-fluid" alt="breakfast">
                                    <h4 class="work-image__h4--pt">Péntek</h4>
                                    <h6>2 fogás: 1350.-</h6>
                                    <h6>3 fogás: 1950.-</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 w">
                                <h6>2 fogás: 1350.-</h6>
                                <h6>3 fogás: 1950.-</h6>
                                <div class="work-cont">
                                    <?php foreach ($getfriday as $friday) : ?>
                                        <ul>
                                            <li>
                                                <h3><?php esc($friday["friday_name"]) ?></h3><span class="mobile-d-none">
                                                </span><em></em>
                                                <p><?php esc($friday["friday_characterization"]) ?></p>
                                            </li>
                                            <hr>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                                <div class="sim-button button26 pogoSlider-slide-element mt-30" data-in="slideUp" data-out="flipX" data-duration="700">
                                    <a href="tel:+36309050101"><span>Hívás most</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>