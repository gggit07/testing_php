<?php

#region Variables
$logo = 'CO';
$menu_items = ['Color Oracle', 'How To', 'Manual', 'Design Tips', 'Useful Links'];
$menu_item_1 = 'Color Oracle';
$menu_item_2 = 'How To';
$menu_item_3 = 'Manual';
$menu_item_4 = 'Design Tips';
$menu_item_5 = 'Useful Links';

$heroTitle = 'Design for the color impaired';
$heroDesc = 'Color Oracle is a free color blindness simulator for Windows, Mac
and Linux. It takes the guesswork out of designing for color
blindness by showing you in real time what people with common color
vision impairments will see.';

$forMac = 'Download for Mac';
$forWindows = 'Download for Windows';
$forLinux = 'Download for Linux';

$aboutTxt = 'Development: Bernie Jenny, Monash University, Australia. Ideas,
testing and icon: Nathaniel Vaughn Kelso, California.';
$feedbackTxt = 'Color Oracle is a work in progress and will improve with time and
your input. Please share your Color Oracle testimonial with us and
send us an email.';
$sourceTxt = 'Color Oracle is open source, available on GitHub for Mac and
Windows/Java.';
$copy = '© 2006–2018 by Bernie Jenny, Monash University, Melbourne,
Australia. Last site update: 5 May 2018.';

#endregion Variables */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/icons/co.png" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/general.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <title>
        <?= $logo ?>
    </title>
</head>

<body>
    <!-- HEADER START -->
    <header class="header">
        <a href="#" class="header__logo">
            <?= $logo ?>
        </a>
        <nav class="header__menu">
            <ul>
                <?php
                $firstItem = &$menu_items[0];
                $active;

                array_map(function ($item) {

                    $active = ($item === 'Color Oracle') ? 'active' : '';
                    echo "<li class='header__menu--item $active'>
                    <a href='##'>$item
                    </a>
                </li>";
                }, $menu_items);

                ?>
                <!-- <li class="header__menu--item active">
                    <a href="##">
                        <?= $menu_item_1 ?>
                    </a>
                </li>
                <li class="header__menu--item">
                    <a href="##">
                        <?= $menu_item_2 ?>
                    </a>
                </li>
                <li class="header__menu--item">
                    <a href="##">
                        <?= $menu_item_3 ?>
                    </a>
                </li>
                <li class="header__menu--item">
                    <a href="##">
                        <?= $menu_item_4 ?>
                    </a>
                </li>
                <li class="header__menu--item">
                    <a href="##">
                        <?= $menu_item_5 ?>
                    </a>
                </li> -->
            </ul>
        </nav>
    </header>
    <!-- HEADER END -->

    <!-- MAIN START -->
    <main>
        <!-- HERO SECTION START -->
        <section class="hero">
            <div class="hero__head">
                <h1 class="hero__head--title">
                    <?= $heroTitle ?>
                </h1>
                <p class="hero__head--desc">
                    <?= $heroDesc ?>
                </p>
            </div>

            <div class="container">
                <div class="hero__download">
                    <div class="hero__download--box">
                        <div class="hero__download--box--shadow"></div>
                        <article class="hero__download--item">
                            <a class="hero__download--item--link btn btn-main" href="##">
                                <?= $forMac ?>
                            </a>
                        </article>
                    </div>
                    <div class="hero__download--box active">
                        <div class="hero__download--box--shadow"></div>
                        <article class="hero__download--item">
                            <a class="hero__download--item--link btn btn-main" href="##">
                                <?= $forWindows ?>
                            </a>
                            <span class="hero__download--item--info">
                                Requires Java 6 or higher
                            </span>
                        </article>
                    </div>

                    <div class="hero__download--box">
                        <div class="hero__download--box--shadow"></div>
                        <article class="hero__download--item">
                            <a class="hero__download--item--link btn btn-main" href="##">
                                <?= $forLinux ?>
                            </a>
                            <span class="hero__download--item--info">
                                Requires Java 6 or higher
                            </span>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO SECTION END -->
    </main>
    <!-- MAIN END -->

    <!-- FOOTER START -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer__top--item">
                    <h4 class="footer__top--title">About</h4>
                    <p class="footer__top--desc">
                        <?= $aboutTxt ?>
                    </p>
                </div>
                <div class="footer__top--item">
                    <h4 class="footer__top--title">Feedback</h4>
                    <p class="footer__top--desc">
                        <?= $feedbackTxt ?>
                    </p>
                </div>
                <div class="footer__top--item">
                    <h4 class="footer__top--title">Source</h4>
                    <p class="footer__top--desc">
                        <?= $sourceTxt ?>
                    </p>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="footer__bottom--copy">
                    <?= $copy ?>
                </p>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <div class="additional">
        <div class="additional__indicator">
            <div id="additional__indicator--toggle">
                <i class="additional__indicator--btn"></i>
            </div>
        </div>
    </div>

    <script src="./assets/js/main.js"></script>
</body>

</html>