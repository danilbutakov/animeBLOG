<?php

require_once __DIR__ . '/php/mysqlauthentication.php';

require_once __DIR__ . '/php/subscribe.php';

require_once __DIR__ . '/php/registration.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home-page.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script src="slick/slick.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php require_once __DIR__ . '/public/header.php'; ?>
        <main class="page">
            <section class="welcome">
                <div class="welcome__content">
                    <div class="content__info">
                        <div class="content__title">Welcome to <br> Gates</div>
                        <div class="content__text">Get the latest news on your favourite mangas, anime and <br> manhwa around the world!</div>
                        <div class="content__form form">
                            <form action="" method="post" class="js-form2" novalidate>
                                <button class="form__button" type="submit" name="submit">SUBSCRIBE</button>
                                <input type="email" name="email__sub" class="form__input js-input2 js-input-email2" placeholder="Enter your email">
                                <button class="form__ico" type="submit" name="submit"><img src="img/ico/Group 4.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                    <div class="content__category">
                        <ul class="content__item">
                            <li><a href="" class="content__link">Action</a></li>
                            <li><a href="" class="content__link">Comedy</a></li>
                            <li><a href="" class="content__link">Drama</a></li>
                            <li><a href="" class="content__link">Military</a></li>
                            <li><a href="" class="content__link">Fantasy</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php require_once __DIR__ . '/public/popup.php'; ?>
            <?php require_once __DIR__ . '/public/new.php'; ?>
            <?php require_once __DIR__ . '/public/trend.php'; ?>
            <?php require_once __DIR__ . '/public/short.php'; ?>
            <section class="blog">
                <div class="blog__container _container">
                    <h3 class="blog__title title">Blog</h3>
                    <div class="blog__categorys">
                        <a href="">
                            <h3 class="categorys__title">comedy</h3>
                        </a>
                        <a href="">
                            <h3 class="categorys__title">fantasy</h3>
                        </a>
                        <a href="">
                            <h3 class="categorys__title">drama</h3>
                        </a>
                        <a href="">
                            <h3 class="categorys__title">action</h3>
                        </a>
                        <a href="">
                            <h3 class="categorys__title">history</h3>
                        </a>
                        <a href="">
                            <h3 class="categorys__title">military</h3>
                        </a>
                    </div>
                    <div class="blog__content">
                        <div class="blog__fantasy">
                            <div class="fantasy__title">Fantasy</div>
                            <div class="fantasy__items">
                                <div class="items__big">
                                    <div class="big__item">
                                        <a href="attack-on-titans.html" class="item__link">
                                            <img src="img/home/Rectangle 42-2.png" alt="">
                                        </a>
                                        <div class="item__info">
                                            <span>1 Month Ago</span>
                                        </div>
                                        <div class="item__title">
                                            <a href="attack-on-titans.html">
                                                <h4>Attack On Titans</h4>
                                            </a>
                                        </div>
                                        <div class="item__text">
                                            lit. Phasellus aliquet nibh id iaculis pharetra. <br> Maecenas eleifend sed ex. Donec quis magna <br> sed felis elementum blandit nec quis sem. <br> Maecen.
                                        </div>
                                        <div class="item__under under">
                                            <div class="under__full">
                                                <a href="attack-on-titans.html"><span>Load more<img src="img/ico/arrow.png" alt=""></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fantasy__small">
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 23.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href="">
                                                    <h4>Akame Ga Kill: Season finale</h4>
                                                </a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 24.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href="">
                                                    <h4>Naruto Uzumaki: Hidden Village</h4>
                                                </a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 25.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href="">
                                                    <h4>Love juice Season Priemere</h4>
                                                </a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small__item">
                                        <a href="" class="item2__link2">
                                            <img src="img/home/Group 25.png" alt="">
                                        </a>
                                        <div class="item2__info2">
                                            <div class="item2__title2">
                                                <a href="">
                                                    <h4>Love juice Season Priemere</h4>
                                                </a>
                                            </div>
                                            <div class="item2__text2">
                                                21 march 2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php require_once __DIR__ . '/public/manga.php'; ?>
                    </div>
                </div>
            </section>
        </main>
        <?php require_once __DIR__ . '/public/footer.php'; ?>
    </div>
    <script src="js/popup.js"></script>
</body>
<script src="js/formIndex1.js"></script>
<script src="js/formIndex2.js"></script>
<script src="js/formIndex3.js"></script>

</html>