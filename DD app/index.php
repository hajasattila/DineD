<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="HU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dine Democracy - Landing</title>
    <link rel="icon" type="image/png" href="https://www.pngmart.com/files/7/Swap-PNG-Picture.png">
    <link href="css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    <!-- Reg validation -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>                          <!-- Ez is. -->
</head>
<body>
    <? php
    ?>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Dine Democracy</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Kezdőlap</a>
                    </li>
                    <li class="nav__item">
                        <a href="#CATE" class="nav__link">Kategóriák</a>
                    </li>
                    <li class="nav__item">
                        <a href="#REG" class="nav__link">Regisztráció</a>
                    </li>
                    <a><label for="modal-trigger-center" class="open-modal button button--ghost">
                            <i class="fas fa-sign-in-alt loginColor"></i>Bejelentkezés</a></label>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
                <img src="https://assets.codepen.io/7773162/nav-img.png" alt="Floating dish.png" class="nav__img">
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>
    <!-- HEADER VÉGE-->

    <!-- Telefon hamburger box -->
      <div class="invisible-div">
            <div class="menu">
                  <nav class="menu__nav">
                        <ul class="menu__list r-list">
                              <li class="menu__group">
                                    <a href="#" class="menu__link r-link">Indítás</a>
                              </li>
                              <li class="menu__group">
                                    <a class="menu__link r-link"><label for="modal-trigger-center" class="open-modal">
                                          Bejelentkezés
                                    </label></a>
                              </li>
                        </ul>
                  </nav>
                  <button class="menu__toggle r-button" type="button">
                        <span class="menu__hamburger m-hamburger">
                              <span class="m-hamburger__label">
                                    <span class="menu__toggle-hint screen-reader"></span>
                              </span>
                        </span>
                  </button>
            </div>
      </div>
    <!-- Telefon hamburger box VÉGE-->


    

    <main class="main">
        <!-- HOME -->
        <section class="home container" id="home">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">
                    <!-- HOME SLIDER 1 -->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="images/food1.png" alt="food1.png" class="about__img">
                            </div>
                            <div class="home__data">
                                <h3 class="home__subtitle">Hívd meg a barátaidat!</h3>
                                <h1 class="home__title">Tanakodsz,<br> hogy mit <br> egyél?</h1>
                                <p class="home__description">Az alkalmazásunk lehetővé teszi, hogy barátaiddal együtt szavazzátok meg a mai menut!
                                    <br>Fedezzetek fel új ételeket és legyetek részesei a 
                                    <br><strong>közös élménynek!</strong></p>
                                    <div class="about__data">
                                        <a href="#" class="book--now">
                                            <div class = "tovabb">
                                                Vágjunk bele!
                                            </div>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </section>
        <!-- HOME VÉGE -->

        <!-- CATEGORY -->
        <section class="section category" id="CATE">
            <h2 class="section__title">Kategóriák<br></h2>
            <div class="category__container container grid">
                <div class="category__data">
                    <img src="https://static.vecteezy.com/system/resources/previews/008/507/708/original/classic-cheeseburger-with-beef-patty-pickles-cheese-tomato-onion-lettuce-and-ketchup-mustard-free-png.png" alt="Dishes.png" class="category__img">
                    <h3 class="category__title">Ételek</h3>
                    <p class="category__description">Már megint nem sikerült eldönteni a helyet?</p>
                </div>
                <div class="category__data">
                    <img src="https://seeklogo.com/images/M/movie-time-cinema-logo-8B5BE91828-seeklogo.com.png" alt="Movie.png" class="category__img">
                    <h3 class="category__title">Filmek</h3>
                    <p class="category__description">Nehéz a filmválasztás, ha többen vagytok?</p>
                </div>
                <div class="category__data">
                    <img src="https://www.pngkey.com/png/full/37-379897_logo-travel-logo-png-free.png" alt="Travel.png" class="category__img">
                    <h3 class="category__title">Utazás</h3>
                    <p class="category__description">Kell egy célpont az utazáshoz?</p>
                </div>
            </div>
        </section>
        <!-- CATEGORY VÉGE -->

        <!-- ABOUT -->
        <section class="section about" id="REG">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">Regisztrációs<br>ELŐNYÖK!!!</h2>
                    <p class="home__description">Regisztrálj most és élvezd a teljes élményt! <br>Az alkalmazásunkban nincs többé korlátozás, így a barátaidnak sem kell
                    regisztrálniuk ahhoz, hogy együtt élvezhessétek a döntéshozatalt. 
                    <br>Elég, ha Te regisztrálsz és máris élvezhetitek a korlátok nélküli gasztronómiai élményt!</p>
                    <a><label for="modal-trigger-center" class="open-modal tovabb">
                            <i class="fas fa-sign-in-alt loginColor"></i>
                            Regisztrálj    MOST!</a></label>
                </div>
                <img src="https://www.successmantra.in/assets/assestsnew/images/login-registration.png" alt="" class="about__img">
            </div>
        </section>
        <!-- ABOUT VÉGE -->

            <!-- NODAL -->
            <div class="pure-modal">
                <input id="modal-trigger-center" class="checkbox" type="checkbox">
                <div class="pure-modal-overlay">
                    <label for="modal-trigger-center" class="o-close"></label>
                    <div class="pure-modal-wrap a-center">
                        <label for="modal-trigger-center" class="close"></label>
                        <!-- INNENTŐL KELL EDITELNI -->

                        <section class="forms-section">
                            <div class="forms">
                                <div class="form-wrapper is-active">
                                <button type="button" class="switcher switcher-login">
                                    Belépés!
                                    <span class="underline"></span>
                                </button>
                                <form class="form form-login">
                                    <fieldset>
                                    <div class="input-block">
                                        <label for="login-email">Felhasználónév: :</label>
                                        <input id="loginusername" type="email" required>
                                    </div>
                                    <div class="input-block">
                                        <label for="login-email">E-mail:</label>
                                        <input id="login-email" type="email" required>
                                    </div>
                                    <div class="input-block">
                                        <label for="login-password">Jelszó:</label>
                                        <input id="login-password" type="password" required>
                                    </div>
                                    </fieldset>
                                    <button type="submit" class="btn-login">Belépés</button>
                                </form>
                                </div>
                                <div class="form-wrapper">
                                <button type="button" class="switcher switcher-signup">
                                    Regisztráció!
                                    <span class="underline"></span>
                                </button>
                                <form class="form form-signup">
                                    <fieldset>
                                    <div class="input-block">
                                        <label for="signup-email">Felhasználóvén: </label>
                                        <input id="username" type="text" name="username" required >
                                    </div>
                                    <div class="input-block">
                                        <label for="signup-email">E-mail:</label>
                                        <input id="email"  type="email" name="email" required >
                                    </div>
                                    <div class="input-block">
                                        <label for="signup-password">Jelszó:</label>
                                        <input id="password" type="password" name="pw"required>
                                    </div>
                                    <div class="input-block">
                                        <label for="signup-password-confirm">Jelszó mégegyszer:</label>
                                        <input id="passwordagain" type="password" name="passwordagain" required>
                                    </div>
                                    </fieldset>
                                    <button type="submit" id="register" class="btn-signup" name="create">Folytatás!</button>
                                </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <script> 
                                document.addEventListener('click', function (event) {
                if (!event.target.closest('.pure-modal')) {
                document.querySelector('#modal-trigger-center').checked = false;
                }
                });
            </script>
            <!-- NODAL VÉGE-->
    </main>
    
    <!-- FOOTER -->
    <section id="footer">
        <div class="main-footer">
            <div class="logoinfo" data-aos="fade-up">
                <div class="contact-details">
                    <h1>Elérhetőség</h1>
                    <li>
                        <div class="fa fa-phone"></div><a href="tel:+36702787890">+36 702787890</a>
                    </li>
                    <li>
                        <div class="fa fa-envelope"></div><a href="mailto:hajaattila@gmail.com">hajaattila@gmail.com</a>
                    </li>
                </div>
            </div>
        </div>
        <footer>
            <p class="footer__text">All rights reserved &copy;</p>
        </footer>
    </section>
    <!-- FOOTER VÉGE -->

<!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/regist.js"></script>

</body>
</html>