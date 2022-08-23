<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container-fluid px-xl-0">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-md-auto col-xl-3 bg-white text-center">
                    <a href="./">
                        <?= renderImg("logo.png", "logo", "py-4") ?>
                    </a>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="row justify-content-center justify-content-lg-end align-items-center gx-0 gy-2 py-2">
                        <div class="col-auto pe-1 px-md-1">
                            <a href="#form" class="btn btn-tertiary rounded-0 text-white py-2 h6 py-md-3 px-md-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto px-1">
                            <a href="" class="btn btn-tertiary rounded-0 text-white py-2 h6 py-md-3 px-md-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col col-md-auto ps-1">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-0 text-white py-2 h6 py-md-3 px-md-4 d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <div class="ps-2"><?= $phone_number ?></div>
                            </a>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="" class="btn d-block btn-tertiary rounded-0 text-white py-2 h6 py-md-3 px-md-4">
                                Click here to view 5 Star Granny Flats
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="container">
            <div class="row pb-4 gx-1 gx-md-auto">
                <div class="col-auto col-lg-5">
                    <div class="based-in-sydney">Are you based in Sydney?</div>
                </div>
                <div class="col col-md-auto">
                    <a href="" class="btn text-tertiary-dark letter-spacing-03 fw-700 h3 get-quote-btn">Get a quote!</a>
                </div>
            </div>
            <div class="row justify-content-between align-items-center gy-4">
                <div class="col-6 col-md-auto">
                    <?= renderImg("detail-badge.png", "lib", "badge-btn") ?>
                </div>
                <div class="col-6 col-md-auto">
                    <?= renderImg("experience-badge.png", "lib", "badge-btn") ?>
                </div>
                <div class="col-auto d-none d-md-block">
                    <?= renderImg("view-more.png", "lib") ?>
                </div>
                <div class="col-6 col-md-auto">
                    <?= renderImg("australian-business.png", "lib", "badge-btn") ?>
                </div>
                <div class="col-6 col-md-auto">
                    <?= renderImg("master-builders.png", "lib", "badge-btn") ?>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about">
    <div class="container">
        <div class="row gx-xxl-6 align-items-center align-items-xxl-start position-relative">
            <div class="col-md-7">
                <?= renderImg("play-btn.png", "icons", "play-btn-xxl") ?>

                <div class="laptop d-xxl-none">
                    <?= renderImg("laptop.png", "lib", "w-100") ?>
                    <?= renderImg("play-btn.png", "icons", "play-btn") ?>
                </div>
            </div>
            <div class="col-md-5 py-xxl-10">
                <h1 class="heroHeading">Only the best</h1>
                <div class="h6 text-dark letter-spacing-01 fw-500 font-gilroy py-4 pe-xxl-7 text-center text-md-start">
                    We are passionate about making your tailored ideas a reality. This means we’re flexible, transparent and direct with our communication, working with you around the clock, and following up your every need.
                </div>
                <div class="row gx-3 pt-3 justify-content-center justify-content-md-start">
                    <div class="col-5">
                        <a href="#form" class="btn btn-dark-grey text-white rounded-0 h6 d-block py-2 py-md-3 font-gilroy fw-500">Get a quote</a>
                    </div>
                    <div class="col-5">
                        <a href="#form" class="btn bordered border-dark-grey text-dark-grey rounded-0 h6 d-block py-2 py-md-3 font-gilroy fw-600">Give us a call</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 pt-md-0 gy-4">
            <div class="col-md-4">
                <div class="cta">
                    <?= renderImg("consultation.png", "icons") ?>
                    <h4 class="text-primary pt-4">Free Onsite Consultations</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cta">
                    <?= renderImg("assurance.png", "icons") ?>
                    <h4 class="text-primary pt-4">Unbeatable Quality Assurance</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cta">
                    <?= renderImg("get-started.png", "icons") ?>
                    <h4 class="text-primary pt-4">Ready To Get Started? Book a consult now</h4>
                </div>
            </div>
        </div>
        <div class="description">
            <div class="row">
                <div class="col-6 col-md-auto">
                    <?= renderImg("stars.png", "icons") ?>
                </div>
                <div class="col-12">
                    <h1 class="text-uppercase fw-800 text-white py-3 letter-spacing-03">Explore our 5 star services</h1>
                </div>
                <div class="col-xl-6 pt-3 pt-md-4">
                    <div class="h6 letter-spacing-01 text-white font-gilroy fw-500 line-height-2">We are passionate about making your tailored ideas a reality. This means we’re flexible, transparent and direct with our communication, working with you around the clock, and following up your every need.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="service-slider">
        <?php
        $services = ["Family style", "Retreat style", "Pool With Spa", "Lap Pools", "Pool With<br> Waterfall", "Infinity Edge<br>Pool", "Plunge Pool", "Above Ground"];

        foreach ($services as $key => $service) {
            $key = $key + 1;
        ?>
            <div class="service-slider-content">
                <?= renderImg("service-" . $key . ".png", "lib", "w-100") ?>
                <div class="title">
                    <div class="h7 letter-spacing-01 fw-700 font-gilroy text-white pb-1">Types of pools</div>
                    <h2 class="text-primary fw-800 letter-spacing-03 text-uppercase <?= ($key == 5 || $key == 6) ? "pb-2" : "pb-5" ?>"><?= $service ?></h2>
                    <a href="#form" class="btn btn-primary text-uppercase text-white letter-spacing-02 fw-700 h6 px-4">Get a Quote</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <h1 class="letter-spacing-03 fw-800 text-uppercase text-primary pb-5 pb-md-8">Pool Construction Gallery</h1>
        <div class="row justify-content-center g-2 g-md-4">
            <div class="col-6 col-md-4"><?= renderImg("gallery-1.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-2.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-3.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-4.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-5.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-6.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-7.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-8.jpg", "lib") ?></div>
            <div class="col-6 col-md-4"><?= renderImg("gallery-9.jpg", "lib") ?></div>
        </div>
    </div>
</section>

<section class="guarantee">
    <div class="container">
        <div class="row justify-content-around gy-5">
            <div class="col-md-3 text-center">
                <?= renderImg("certified.png", "icons") ?>
                <h1 class="text-white fw-800 py-3">100%</h1>
                <div class="text-white h6 letter-spacing-01">satisfaction guarantee, using only Australian made products.</div>
            </div>
            <div class="col-md-3 text-center">
                <?= renderImg("calendar.png", "icons") ?>
                <h1 class="text-white fw-800 py-3 text-uppercase">15 Years</h1>
                <div class="text-white h6 letter-spacing-01">First established as a small family business we are now one of the youngest and fastest growing builders in NSW</div>
            </div>
            <div class="col-md-3 text-center">
                <?= renderImg("helmet.png", "icons") ?>
                <h1 class="text-white fw-800 py-3 text-uppercase">Over 50</h1>
                <div class="text-white h6 letter-spacing-01">Our dedicated team produce the highest quality finishes on all projects finalising over 50 builds a year.</div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <h1 class="text-primary fw-800 text-uppercase text-center letter-spacing-03 pb-3">Ready to get Started?</h1>
        <div class="h6 text-center text-dark font-gilroy letter-spacing-01 fw-500 py-4">Contact one of our friendly staff to guide you through our simple process and organise a free onsite visit with our experienced builders.</div>
        <form action="./src/form" method="POST" class="pt-4 pt-md-6">
            <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-primary font-gilroy fw-500 letter-spacing-01 pb-4">Select from the following</h4>
                    <div class="row gy-4">
                        <div class="col-12">
                            <label class="form-label">Please Choose What You're After</label>
                            <div class="row radio-toolbar g-0">
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Lap Pool" id="lapPool" checked>
                                    <label class="form-check-label" for="lapPool">
                                        <div class="radio-img"><?= renderImg("lap-pool.png", "icons") ?></div>
                                        <div>Lap Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Plunge Pool" id="plungePool">
                                    <label class="form-check-label" for="plungePool">
                                        <div class="radio-img"><?= renderImg("plunge-pool.png", "icons") ?></div>
                                        <div>Plunge Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Infinity Pool" id="infinityPool">
                                    <label class="form-check-label" for="infinityPool">
                                        <div class="radio-img"><?= renderImg("infinity-pool.png", "icons") ?></div>
                                        <div>Infinity Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Architectural Pool" id="architecturalPool">
                                    <label class="form-check-label" for="architecturalPool">
                                        <div class="radio-img"><?= renderImg("architectural-pool.png", "icons") ?></div>
                                        <div>Architectural Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Indoor Pool" id="indoorPool">
                                    <label class="form-check-label" for="indoorPool">
                                        <div class="radio-img"><?= renderImg("indoor-pool.png", "icons") ?></div>
                                        <div>Indoor Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="In-Ground Pool" id="ingroundPool">
                                    <label class="form-check-label" for="ingroundPool">
                                        <div class="radio-img"><?= renderImg("in-ground-pool.png", "icons") ?></div>
                                        <div>In-Ground Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="Above Ground Pool" id="aboveGroundPool">
                                    <label class="form-check-label" for="aboveGroundPool">
                                        <div class="radio-img"><?= renderImg("above-ground-pool.png", "icons") ?></div>
                                        <div>Above Ground Pool</div>
                                    </label>
                                </div>
                                <div class="col-3 col-md">
                                    <input class="form-check-input" type="radio" name="poolType" value="others" id="othersPool">
                                    <label class="form-check-label" for="othersPool">
                                        <div class="radio-img"><?= renderImg("others.png", "icons") ?></div>
                                        <div>Others</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="comment">Services Required (please list below)</label>
                            <textarea name="comment" id="comment" rows="7" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-primary font-gilroy fw-500 letter-spacing-01 pb-4">Please fill in your information</h4>
                    <div class="row gx-2 gy-3 g-md-4 align-items-end">
                        <div class="col-6">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-5 col-lg-6">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="phone" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="col-7 col-lg-5">
                            <label class="form-label" for="street">Street</label>
                            <input type="text" class="form-control" id="street" name="street" required>
                        </div>
                        <div class="col-5 col-lg-3">
                            <label class="form-label" for="suburb">Suburb</label>
                            <input type="text" class="form-control" id="suburb" name="suburb" required>
                        </div>
                        <div class="col-3 col-lg-2">
                            <label class="form-label" for="postcode">Post Code</label>
                            <input type="number" class="form-control" id="postcode" name="postcode" required>
                        </div>
                        <div class="col-4 col-lg-2">
                            <label class="form-label" for="state">State</label>
                            <select class="form-control" name="state" id="state" required>
                                <option selected>NSW</option>
                                <option>South Australia</option>
                                <option>Western Australia</option>
                                <option>Queensland</option>
                                <option>Victoria</option>
                                <option>ACT</option>
                                <option>Northern Territory</option>
                                <option>Tasmania</option>
                            </select>
                        </div>
                        <div class="col-lg-auto">
                            <label class="form-label" for="state">How did you hear about us?</label>
                            <select class="form-control" name="state" id="state" required>
                                <option selected>Internet</option>
                                <option>Word of Mouth</option>
                                <option>Internet</option>
                                <option>Advertisement</option>
                            </select>
                        </div>
                        <div class="col">
                            <button class="btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="promise">
    <div class="container">
        <h2 class="pb-2">The Five Star Promise</h2>
        <div class="row justify-content-center py-4">
            <div class="col-xl-10">
                <div class="h6">With a considerable amount of industry experience, our builders use tried and tested methods and materials to maintain the highest quality work, and customer satisfaction standards.</div>
            </div>
        </div>
        <div class="row justify-content-center justify-content-md-between pt-5 gy-5">
            <div class="col-6 col-md-auto">
                <div class="star-wrapper">
                    <div><?= renderImg("star-top.png", "icons") ?></div>
                    <?= renderImg("commitment.png", "icons", "floating-img") ?>
                    <div class="star-bottom"><?= renderImg("star-bottom.png", "icons") ?></div>
                </div>
                <h4>Commitment</h4>
            </div>
            <div class="col-6 col-md-auto">
                <div class="star-wrapper">
                    <div><?= renderImg("star-top.png", "icons") ?></div>
                    <?= renderImg("professionalism.png", "icons", "floating-img") ?>
                    <div class="star-bottom"><?= renderImg("star-bottom.png", "icons") ?></div>
                </div>
                <h4>Professionalism</h4>
            </div>
            <div class="col-6 col-md-auto">
                <div class="star-wrapper">
                    <div><?= renderImg("star-top.png", "icons") ?></div>
                    <?= renderImg("transparency.png", "icons", "floating-img") ?>
                    <div class="star-bottom"><?= renderImg("star-bottom.png", "icons") ?></div>
                </div>
                <h4>Transparency</h4>
            </div>
            <div class="col-6 col-md-auto">
                <div class="star-wrapper">
                    <div><?= renderImg("star-top.png", "icons") ?></div>
                    <?= renderImg("seamless-delivery.png", "icons", "floating-img") ?>
                    <div class="star-bottom"><?= renderImg("star-bottom.png", "icons") ?></div>
                </div>
                <h4>Seamless Delivery</h4>
            </div>
            <div class="col-6 col-md-auto">
                <div class="star-wrapper">
                    <div><?= renderImg("star-top.png", "icons") ?></div>
                    <?= renderImg("close-contact.png", "icons", "floating-img") ?>
                    <div class="star-bottom"><?= renderImg("star-bottom.png", "icons") ?></div>
                </div>
                <h4>Close Contact</h4>
            </div>
        </div>
    </div>
</section>

<section class="other-services">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col col-md-auto"><?= renderImg("5-star-pools.png","logo") ?></div>
            <div class="col col-md-auto"><?= renderImg("5-star-builders.png","logo") ?></div>
            <div class="col col-md-auto"><?= renderImg("5-star-granny-flat.png","logo") ?></div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>