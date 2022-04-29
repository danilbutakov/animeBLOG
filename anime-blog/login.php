<?php

    require_once '/php/authorization.php';

    require_once '/php/registration.php';

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src="slick/slick.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <div class="header__body">
                    <a href="index.php" class="header__logo">
                        <img src="img/header/Logo.png" alt="Logo">
                    </a>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li><a href="index.php" class="header__link">Home</a></li>
                            <li><a href="" class="header__link">Connect</a></li>
                            <li><a href="#" class="header__link sign-up" id="open__pop_up">Sign up</a></li>
                            <li><a href="login.php" class="header__link login _active">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="page">
            <section class="sign">
                <div class="sign__content _container-signlog">
                    <div class="content__form2">
                        <form action="" method="post" class="js-form" novalidate>
                            <div class="form2__item">
                                <label for="" class="form__label">Email</label>
                                <input type="email" name="email" class="form__input js-input js-input-email" placeholder="Enter your Email" />
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label__password">Password</label>
                                <input type="password" name="pass" class="form__input js-input js-input-password" placeholder="Enter your Password" />
                            </div>
                            <div class="form2__button">
                                <button type="submit" name="submit" class="button__send">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="popup" id="pop_up">
                <div class="popup__container">
                    
                    <div class="popup__body">
                        <form action="" method="post" class="js-form1" novalidate>
                            <div class="form2__item">
                                <label for="" class="form__label">Name</label>
                                <input type="text" name="name" class="form__input2 js-input1" placeholder="Enter your Name"/>
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label">Email</label>
                                <input type="email" name="email" class="form__input2 js-input1 js-input-email1" placeholder="Enter your Email" />
                            </div>
                            <div class="form2__item">
                                <label for="" class="form__label__password">Password</label>
                                <input type="password" name="pass" class="form__input2 js-input1 js-input-password1" placeholder="Enter your Password" />
                            </div>
                            <div class="form2__button1">
                                <button type="submit" name="submit" class="button__send1">Sign up</button>
                            </div>
                            <div class="form2__button1_close1">
                                <button type="submit" name="submit" class="button__send1">Sign up</button>
                                <button class="close__pop_up" id="close__pop_up_1">Close</button>
                            </div>
                        </form>
                        <div class="close__popup" id="close__pop_up">&#10006</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="js/popup.js"></script>
</body>
<script src="js/formIndex1.js"></script>
<script src="js/login.js"></script>
</html>
