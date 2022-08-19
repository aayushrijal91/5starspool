<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<header>
    <div class="header-top-bar">
        <div class="container-fluid px-xl-0">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto col-xl-3 bg-white text-center">
                    <a href="./">
                        <?= renderImg("logo.png", "logo", "py-4") ?>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="row justify-content-center justify-content-lg-end no-gutters align-items-center gx-0">
                        <div class="col-md-auto px-1">
                            <a href="#form-quote" class="btn btn-tertiary rounded-0 text-white py-3 px-md-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto px-1">
                            <a href="" class="btn btn-tertiary rounded-0 text-white py-3 px-md-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-md-auto ps-1">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-tertiary rounded-0 text-white py-3 px-md-4 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <div class="ps-2"><?= $phone_number ?></div>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="btn btn-tertiary rounded-0 text-white py-3 px-md-4">
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
            <div class="row pb-4">
                <div class="col-lg-5">
                    <div class="based-in-sydney">Are you based in Sydney?</div>
                </div>
                <div class="col-auto">
                    <a href="" class="btn text-tertiary-dark letter-spacing-03 fw-700 h3 get-quote-btn">Get a quote!</a>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <?= renderImg("detail-badge.png", "lib") ?>
                </div>
                <div class="col-auto">
                    <?= renderImg("experience-badge.png", "lib") ?>
                </div>
                <div class="col-auto">
                    <?= renderImg("view-more.png", "lib") ?>
                </div>
                <div class="col-auto">
                    <?= renderImg("australian-business.png", "lib") ?>
                </div>
                <div class="col-auto">
                    <?= renderImg("master-builders.png", "lib") ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?php include __DIR__ . '/footer.php'; ?>