<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Jadoo</title>
    <style>
        @font-face {
            font-family: GoogleSans;
            src: url(fonts/GoogleSans-Medium.ttf)
        }
        @font-face {
            font-family: Poppins-Bold;
            src: url(fonts/Poppins-Bold.ttf)
        }
        @font-face {
            font-family: Poppins-Medium;
            src: url(fonts/Poppins-Medium.ttf)
        }
        @font-face {
            font-family: Volkhov-Bold;
            src: url(fonts/Volkhov-Bold.ttf)
        }
        @font-face {
            font-family: OpenSans;
            src: url(fonts/OpenSans-SemiBold.ttf)
        }
        @font-face {
            font-family: Poppins-Regulare;
            src: url(fonts/Poppins-Regular.ttf)
        }
    </style>
</head>
<body>
    <?php
    ?>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="container">
                    <div class="header__row">
                        <a href="#" class="header__logo">
                            <img class="logo_img" src="img\logo.svg" alt="Logo">
                        </a>
                        <nav class="header__menu menu">
                            <ul class="menu_list">
                                <li class="menu__list-item">
                                    <a class= "header_menu__link" href="#">Desitnations</a>
                                </li>
                                <li class="menu__list-item">
                                    <a class="header_menu__link" href="#">Hotels</a>
                                </li>
                                <li class="menu__list-item">
                                    <a class="header_menu__link" href="#">Flights</a>
                                </li>
                                <li class="menu__list-item">
                                    <a class="header_menu__link" href="#">Bookings</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__authentication menu">
                            <ul class="menu_list">
                                <li class="menu__list-item">
                                    <a class= "header_menu__link" href="#">Log in</a>
                                </li>
                                <li class="menu__list-item ">
                                    <a class= "header_menu__link menu__link--border" href="#">Sign in</a>
                                </li>
                            </ul>
                        </div>        
                    </div>
                </div>
                <div class="header__body">
                    <div class="container">
                        <div class="header__row">
                            <div class="header__title">
                                <div class="row__subtitle">BEST DESTINATIONS AROUND THE WORLD</div>
                                <div class="row__title title text--size_84 title--padding">
                                    Travel, enjoy <br> and live a new <br> and full life
                                </div>
                                <div class="row__text">
                                    <p class="row__text main__text text--lineheight">Built Wicket longer admire do barton vanity itself do in it. <br> Preferred to sportsmen it engrossed listening. Park gate <br> sell they west hard for the.</p>
                                </div>
                                <div class="header__button">
                                    <button class="button__find  text--button" href="#">Find out more</button>
                                    <button class="button__demo" href="#">
                                        <div class="triangle_right"></div>
                                    </button>
                                    <div class="row__text">
                                        <p class="row__text main__text row__text--padding">Play Demo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row__image">
                                <img class="body__image" src="img/traveller.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="category">
            <div class="container">
                <div class="category__title">
                    <div class="category__about main__text text--title">CATEGORY</div>
                    <div class="category__subtitle subtitle">We Offer Best Services</div>
                </div>
                <div class="category__row">
                    <div class="category__element">
                        <img class="element__image" src="img/satellite-dish.svg" alt="">
                        <div class="element__subtitle">Calculated Weather</div>
                        <div class="element__text main__text">Built Wicket longer admire do barton vanity itself do in it.</div>
                    </div>
                    <div class="category__element">
                        <img class="element__image" src="img/plane.svg" alt="">
                        <div class="element__subtitle element--relative">Best Flights</div>
                        <div class="element__text main__text element--relative">Engrossed listening. Park gate sell they west hard for the.</div>
                    </div>
                    <div class="category__element">
                        <img class="element__image" src="img/micro.svg" alt="">
                        <div class="element__subtitle">Local Events</div>
                        <div class="element__text main__text">Barton vanity itself do in it. Preferd to men it engrossed listening. </div>
                    </div>
                    <div class="category__element">
                        <img class="element__image" src="img/power-supply.svg" alt="">
                        <div class="element__subtitle">Customization</div>
                        <div class="element__text main__text">We deliver outsourced aviation services for military customers.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="selling">
            <div class="container">
                <div class="selling__title">
                    <div class="selling__about main__text text--title">Top Selling </div>
                    <div class="selling__text subtitle">Top Destinations</div>
                </div>
                <div class="selling__row">
                    <div class="selling__card">
                        <div class="selling__image">
                            <img class="card__image" src="img/card_1.svg" alt="">
                        </div>   
                        <div class="block">
                            <div class="card__country main__text">Rome, Italty</div>
                            <div class="card__price main__text">$5,42k</div>
                            <img class="card__navigate" src="img/navigation.svg" alt="">
                            <div class="card__time main__text">10 Days Trip</div>
                        </div>
                    </div>
                    <div class="selling__card">
                        <div class="selling__image">
                            <img class="card__image" src="img/card_2.svg" alt="">
                        </div>
                        <div class="block">
                            <div class="card__country main__text">London, UK</div>
                            <div class="card__price main__text">$4,2k</div>
                            <img class="card__navigate" src="img/navigation.svg" alt="">
                            <div class="card__time main__text">12 Days Trip</div>
                        </div>
                    </div>
                    <div class="selling__card">
                        <div class="selling__image">
                            <img class="card__image" src="img/card_3.svg" alt="">
                        </div>
                        <div class="block">
                        <div class="card__country main__text">Full Europe</div>
                        <div class="card__price main__text">$15k</div>
                        <img class="card__navigate" src="img/navigation.svg" alt="">
                        <div class="card__time main__text">28 Days Trip</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reserve">
            <div class="container">
                <div class="reserve__row">
                    <div class="reserve__information">
                        <div class="reserve__about main__text text--title">Easy and Fast</div>
                        <div class="reserve__text subtitle">Book your next trip <br> In 3 easy steps</div>
                        <div class="reserver__block">
                            <div class="block__image">
                                <img src="img/image_reserve_block.svg" alt="">
                            </div>
                            <div class="reserve__content">
                                <div class="reserve__subtitle main__text">Choose Destination</div>
                                <div class="reserve__text main__text">Lorem ipsum dolor sit amet consectetur <br> adipiscing elit. Urna, tortor tempus.</div>
                            </div>
                        </div>
                        <div class="reserver__block">
                            <div class="block__image">
                                <img src="img/image_reserve_block_2.svg" alt="">
                            </div>
                            <div class="reserve__content">
                                <div class="reserve__subtitle main__text">Make Payment</div>
                                <div class="reserve__text main__text">Lorem ipsum dolor sit amet consectetur <br> adipiscing elit. Urna, tortor tempus.</div>
                            </div>
                        </div>
                        <div class="reserver__block">
                            <div class="block__image">
                                <img src="img/image_reserve_block_3.svg" alt="">
                            </div>
                            <div class="reserve__content">
                                <div class="reserve__subtitle main__text">Reach Airport on Selected Date</div>
                                <div class="reserve__text main__text">Lorem ipsum dolor sit amet consectetur <br> adipiscing elit. Urna, tortor tempus.</div>
                            </div>
                        </div>
                    </div>
                    <div class="reserver__image">
                        <img class="image_reserve"src="img/image_reserve.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="sponsor">
            <div class="container">
                <div class="sponsor__row">
                    <div class="sponsor__logo">
                        <img src="img/company.svg" alt="">
                    </div>
                    <div class="sponsor__logo">
                        <img src="img/company_2.svg" alt="">
                    </div>
                    <div class="sponsor__logo">
                        <img src="img/company_3.svg" alt="">
                    </div>
                    <div class="sponsor__logo">
                        <img src="img/company_4.svg" alt="">
                    </div>
                    <div class="sponsor__logo">
                        <img src="img/company_5.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe">
            <div class="container">
                <div class="subscribe__title">
                    <p class="subscribe__text main__text">Subscribe to get information, latest news and other <br> interesting offers about Cobham</p>
                </div>
                <div class="form__sending">
                    <input type="email" class="form__input" name="email" placeholder="Your email">
                    <button type="submit" class="form__btn text--button" href="#">Subscribe</button>
                </div>
            </div>   
        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__title">
                        <h1 class="footer__logo">Jadoo.</h1>
                        <p class="footer__text main__text">Book your trip in minute, get full<br>Control for much longer.</p>
                    </div>
                    <ul class="footer_row__text">
                        <h1 class="footer__subtitle">Company</h1>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">About</a>
                        </li>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Careers</a>
                        </li>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Mobile</a>
                        </li>
                    </ul>
                    <ul class="footer_row__text">
                        <h1 class="footer__subtitle">Contact</h1>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Help/FAQ</a>
                        </li>
                        <li class="footer_menu__list-item ">
                            <a class= "footer_menu__link main__text" href="#">Press</a>
                        </li>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Affilates</a>
                        </li>
                    </ul>
                    <ul class="footer_row__text">
                        <h1 class="footer__subtitle">More</h1>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Airlinefees</a>
                        </li>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Airline</a>
                        </li>
                        <li class="footer_menu__list-item">
                            <a class= "footer_menu__link main__text" href="#">Low fare tips</a>
                        </li>     
                    </ul>
                    <div class="social">
                        <div class="social__columns">
                            <div class="social__row">
                                <div class="social_image_1">
                                    <img src="img/social.svg" alt="">
                                </div>
                                <div class="social_image_2">
                                    <img src="img/social_2.jpg" alt="">
                                </div>
                                <div class="social_image_3">
                                    <img src="img/social_3.svg" alt="">
                                </div>
                            </div>
                            <p class="social__text main__text">Discover our app</p>
                            <div class="social__row">
                                <button class="social__button icon__google">
                                    <div class="icon_button">
                                        <img src="img/google-play.svg" alt="">
                                        <img src="img/google_text.svg" alt="">
                                    </div>
                                </button>
                                <button class="social__button">
                                    <div class="icon_button">
                                        <img src="img/apple.svg" alt="">
                                        <img src="img/apple_text.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom main__text">All rights reserved@jadoo.com</div>
            </div>
        </footer>
    </div>
</body>
</html>
