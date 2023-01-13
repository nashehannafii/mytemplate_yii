<?php

use app\assets\DashboardAsset;
use yii\helpers\Url;

DashboardAsset::register($this);
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <?php $this->head() ?>
    <?= $this->registerCsrfMetaTags() ?>

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Main CSS-->
    <link href="<?= Url::home() ?>css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php $this->beginBody() ?>

    <?php
    if (Yii::$app->user->isGuest) {
    ?>

        <?= $content ?>

    <?php
    } else {
    ?>

        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="<?= Url::home() ?>images/icon/logo.png" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">

                            <?php $this->beginContent("@app/views/layouts/MenuHelper.php") ?>
                            <?php $this->endContent() ?>


                        </ul>
                    </div>
                </nav>

            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="<?= Url::home() ?>images/icon/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">

                            <?php $this->beginContent("@app/views/layouts/MenuHelper.php") ?>
                            <?php $this->endContent() ?>

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <?php $this->beginContent("@app/views/layouts/TopbarHelper.php") ?>
                <?php $this->endContent() ?>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">

                            <?= $content ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2022 Nasheh Annafii. All rights reserved. Contact by <a href="https://nashehannafii.github.io">Github</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>

    <?php
    }
    ?>




    <?php $this->endBody() ?>

</body>

</html>
<!-- end document-->

<?php $this->endPage() ?>