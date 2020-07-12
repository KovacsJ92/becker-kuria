<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Becker Kúria</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <!-- FLATICON -->
    <link href="assets/plugins/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- ANIMATE CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- VEGAS CSS -->
    <link href="assets/plugins/vegas/vegas.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link href="assets/plugins/owl/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl/owl.theme.default.min.css" rel="stylesheet">
    <!-- BOOTSTRAP DATEPICKER -->
    <link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- TEMPLATE STYLE -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="http://hu.allfont.net/allfont.css?fonts=bookman-old-style" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div id="page-loader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- SITE WRAPPER -->
    <div class="site-wrapper">
        <div class="site-header">
            <div class="container">
                <!-- TOP HEADER -->
                <div id="top-header" class="row hidden-xs hidden-sm hidden-md">
                    <div class="col-md-6">
                        <span><i class="flaticon-mail"></i> beckerkuria@gmail.com</span>
                        <span><i class="flaticon-technology"></i> +36 30/944-06-42</span>
                    </div>
                </div>
                <!-- END OF TOP HEADER -->

                <!-- MAIN HEADER -->
                <div id="main-header" class="row">
                    <div class="col-md-4 col-xs-9">
                        <a href="" class="site-title underline">becker <span class="colored normal">kúria</span></a>
                    </div>
                    <div class="col-md-8 col-xs-12  text-right hidden-xs hidden-sm">
                        <ul id="main-nav">
                            <li><a href="#home" class="smooth-scroll animated-underline">kezdőlap</a></li>
                            <li><a href="#rooms" class="smooth-scroll animated-underline">Szálláshelyek</a></li>
                            <li><a href="#dining" class="smooth-scroll animated-underline">Étkezés</a></li>
                            <li><a href="#meetings-and-events" class="smooth-scroll animated-underline">Szolgáltatások</a></li>
                            <!-- <li><a href="#room-details-modal" data-toggle="modal" data-target="#houserule" class="smooth-scroll animated-underline">Házirend</a></li> -->
                            <li><a href="#about" class="smooth-scroll animated-underline">Rólunk</a></li>
                            <li><a href="#contact-us" class="smooth-scroll animated-underline">Kapcsolatok</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-3 hidden-md hidden-lg">
                        <a href="#" id="mobile-menu-btn" class="pull-right"><i class="flaticon-bars"></i></a>
                        <div id="mobile-menu">
                            <a href="#" id="close-mobile-menu-btn"><i class="flaticon-cross-out"></i> Close</a>
                            <ul class="">
                                <li><a href="#home" class="smooth-scroll">Kezdőlap</a></li>
                                <li><a href="#rooms" class="smooth-scroll">Szálláshelyek</a></li>
                                <li><a href="#dining" class="smooth-scroll animated-underline">Étkezés</a></li>
                                <li><a href="#meetings-and-events" class="smooth-scroll animated-underline">Szolgáltatások</a></li>
                                <!-- <li><a href="#room-details-modal" data-toggle="modal" data-target="#houserule" class="smooth-scroll">Házirend</a></li> -->
                                <li><a href="#about" class="smooth-scroll">Rólunk</a></li>
                                <li><a href="#contact-us" class="smooth-scroll">Kapcsolatok</a></li>
                            </ul>
                        </div>
                        <div id="mobile-menu-overlay"></div>
                    </div>
                </div>
                <!-- END OF MAIN HEADER -->
            </div>
        </div>
        <!-- END OF SITE HEADER -->

        <!-- HOME -->
        <section id="home" class="hero">
            <div class="hero-inner container text-center">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="title invisible">Múlt    századi hangulat, <br>mediterrán köntösben.<span class="colored light"></span></h1>
                        <!-- <p class="description invisible">Múltszázadi hangulat,mediterrán köntösben.</p> -->
                        <!-- <a href="#rooms" id="hero-book-now" class="button ghost round large invisible smooth-scroll">Learn More</a> -->
                    </div>
                </div>
            </div>
            <div class="dark-overlay"></div>
        </section>
        <!-- END OF HOME -->

        <!-- ROOMS -->
        <section id="rooms" class="white-space-5 light-bg">
            <div class="container">
                <div class="row waypoint" data-animate="slideInLeft" data-offset="70">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
                        <h2 class="light dark-grey underline uppercase">Szálláshelyek</h2>
                    </div>
                </div>
                <div class="row waypoint" data-offset="70">
                    <div class="col-xs-12">
                        <ul class="filter-rooms text-center">
                            <li data-filter="1" class="filter-room-btn active">Összes</li>
                            <li data-filter="2" class="filter-room-btn">Szoba</li>
                            <li data-filter="3" class="filter-room-btn">Lakosztály</li>
                            <!-- <li data-filter="4" class="filter-room-btn">Deluxe</li> -->
                            <!-- <li data-filter="5" class="filter-room-btn">Suite</li> -->
                        </ul>
                        <div class="filtr-container row text-center">
                            <div class="filtr-item col-md-3 col-sm-6" data-category="1, 2">
                                <div class="white-space-2 room-box">
                                    <div class="room-image">
                                        <a href="#" data-toggle="modal" data-target="#room-details-modal"><i class="flaticon-search"></i></a>
                                        <img class="img-responsive" src="assets/images/default/szoba1.jpg" alt="room-image">
                                    </div>
                                    <h4 class="room-type">Szoba</h4>
                                    <p class="light">36.000 Ft/2fő/éj</p>
                                    <button class="button dark large" data-toggle="modal" data-target="#room-details-modal">Részletek</button>
                                </div>
                            </div>
                            <div class="filtr-item col-md-3 col-sm-6" data-category="1, 3">
                                <div class="white-space-2 room-box">
                                    <div class="room-image">
                                        <a href="#" data-toggle="modal" data-target="#room-details-modal2"><i class="flaticon-search"></i></a>
                                        <img class="img-responsive" src="assets/images/default/lakosztaly2.jpg" alt="room-image">
                                    </div>
                                    <h4 class="room-type">Lakosztály</h4>
                                    <p class="light">50.000 Ft/2fő/éj</p>
                                    <button class="button dark large" data-toggle="modal" data-target="#room-details-modal2">Részletek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF ROOMS -->

        <!-- DINING -->
        <section id="dining" class="white-space-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
                        <h2 class="light dark-grey underline uppercase">Étkezés</h2>
                    </div>
                </div>
                <div class="white-space-3"></div>
                <div class="row">
                    <div class="col-md-6 flex-center">
                        <img src="assets/images/default/szep.jpg" class="img-responsive" alt="dining">
                        <div class="white-space-2"></div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="colored">Reggeli</h2>
                        <p class="light">Reggeli a kúria melletti Szép Kávézóban igényelhető, egyéni fizetéssel. Bővített kontinentális reggeli 3000Ft/fő: kávé vagy tea, gyümölcslé, péksütemény, vaj, jam, felvágottak, zödségek, sajtok.</p>
                        <a href="#" class="button large">Reggeli menü</a>
                    </div>
                </div>
                <div class="white-space-5"></div>
                <div class="row">
                    <div class="col-md-6 col-md-push-6 flex-center">
                        <img src="assets/images/default/kertbisztro.jpg" class="img-responsive" alt="dining">
                        <div class="white-space-2"></div>
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        <h2 class="colored">Ebéd és vacsora</h2>
                        <p class="light">A vízparti Konyhakert Bisztró és Bár –ban van lehetőség menü és a la carte étkezésre.</p>
                        <a href="https://www.facebook.com/Konyha-Kert-Bisztr%C3%B3-%C3%A9s-B%C3%A1r-1696944263733324" class="button large">Menük</a>
                    </div>
                </div>
            </div>
            <div class="white-space-3"></div>
        </section>
        <!-- END OF DINING -->

        <!-- MEETINGS & EVENTS -->
        <section id="meetings-and-events" style="background-image: url('assets/images/default/IMG_20200630_132131.jpg')">
            <div class="dark-overlay"></div>
            <div class="container">
                <div class="">
                    <div class="text-center">
                        <h2 class="light white underline uppercase text-center">Szolgáltatások</h2>
                    </div>
                    <div class="service">
                        <div class="service__item white">
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_Parking_2582888.svg" alt="">
                                <p class="service__text">Ingyenes parkolás</p>
                            </div>
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_Bicycle_15900.svg" alt="">
                                <p>Kerékpárkölcsönzés</p>
                            </div>
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_Boat_2585486.svg" alt="">
                                <p>Kajakkölcsönzés</p>
                            </div>
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_Breakfast_1906093.svg" alt="">
                                <p>Reggeli igénylés</p>
                            </div>
                        </div>
                        <div class="service__item white">
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_wifi_1847255.svg" alt="">
                                <p>Ingyenes WIFI</p>
                            </div>
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_TV_1958528.svg" alt="">
                                <p>4K smart TV</p>
                            </div>
                            <div class="service__items">
                                <img class="service__icon" src="assets/images/default/noun_safe_821426.svg" alt="">
                                <p>Szobaszéf</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF MEETINGS & EVENTS -->

        <!-- ABOUT -->
        <section id="about" class="white-space-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title white-space-7 about-title">
                            <span class="normal colored">Becker Kúria</span>
                        </h1>
                    </div>
                    <div class="col-md-6">
                        <h4 class="light underline uppercase">Rólunk</h4>
                        <p class="light">A part menti dombokra épült, erdők és hegyek ölelésében található Balatonszepezden várjuk
múltszázadi hangulatú kúriánkba, pihenni vágyó vendégeinket. Az 1850-es években épült kúria, a falu
központjában,a vízpart közelében,a templomkert szomszédságában korhű állapotában pompázik.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row white-space-2">
                            <div class="col-xs-6">
                                <img src="assets/images/default/old1.jpg" class="img-responsive" alt="about-image">
                            </div>
                            <div class="col-xs-6">
                                <img src="assets/images/default/retro1.jpg" class="img-responsive" alt="about-image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <img src="assets/images/default/retro2.jpg" class="img-responsive" alt="about-image">
                            </div>
                            <div class="col-xs-6">
                                <img src="assets/images/default/retro3.jpg" class="img-responsive" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="light underline uppercase white-space-2">Kúria története</h4>
                        <p class="light">Eredetileg Felsődörgicsei Nagy Pál (1832-†1891) háza volt, az1850-es években épült. 1887-ben már fürdővendégkönyvet vezettek. 1891-ben Felsődörgicsei Nagy Pál halála után az épületet eladták Gróf Apponyi Henriknek (1885–1936), majd ő ajándékozta a kor ünnepelt szépségének, így lett „Becker Bäby ház”.</p>
                        <p class="light">Bertha Bulcsu (1935-1997) Becker Bäby és a peszticidek c. könyvében a következőket írja: „A szepezdi főútra épült villát már gróf Apponyi Henrik ajándékozta a kor ünnepelt szépségének. A pletyka szerint gróf Apponyi Henrik feleségül akarta venni Becker Bäbyt, de végül nem ő, hanem Heinrich Antal, a gazdag vasgyáros vezette anyakönyvvezető elé.</p>
                        <p class="light">Becker Bäby szepezdi villájába a jobb emberek persze a főkapun szoktak belépni… Urak, művészek, sportolók… A villa gyakori vendége volt a híres vívóbajnok, Petschauer Attila is. A későbbiekben az államosítás után, 70 évig szakszervezeti üdülőként működött. Teljes körű felújítás után, jelenleg panzióként üzemel.</p>
                        <!-- <a href="#" class="button">Read More</a> -->
                    </div>
                </div>
                <div class="white-space-3"></div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <h1 class="title white-space-7">
                            Every great <span class="normal dark-grey">business</span><br> is built on <span class="normal colored">friendship</span><br>
                        </h1>
                    </div>
                    <div class="col-md-6">
                        <h4 class="light underline uppercase">Customer Reviews</h4>
                        <div class="owl-carousel owl-theme">
                            <div class="white-space-2">
                                <span class="light">Grace Wright</span>
                                <br>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <br><br>
                                <p>Best experience ever!!!</p>
                                <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, est, adipisci. Minus maxime vitae, et amet dicta. Provident vel architecto ipsa natus expedita beatae sed aliquid aspernatur, praesentium autem nemo.Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis numquam non quas ex at quod, ut, et cumque fugiat repellendus quae iusto reiciendis. Ratione accusamus, eligendi dolores, laboriosam beatae vitae.</p>
                            </div>
                            <div class="white-space-2">
                                <span class="light">Steve Young</span>
                                <br>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <br><br>
                                <p>Great Food, Great Stay!</p>
                                <p class="light">Adipisci. Minus maxime vitae, et amet dicta. Provident vel architecto ipsa natus expedita beatae sed aliquid aspernatur, praesentium autem nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis numquam
                                    non quas ex at quod, ut, et cumque fugiat repellendus quae iusto reiciendis. Ratione accusamus, eligendi dolores, laboriosam beatae vitae.</p>
                            </div>
                            <div class="white-space-2">
                                <span class="light">Kate Lee Adams</span>
                                <br>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape-2 tiny-icon"></span>
                                <br><br>
                                <p>Had a great time with my family</p>
                                <p class="light">Consectetur adipisicing elit. Nisi, est, adipisci. raesentium autem nemo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis numquam non quas ex at quod, ut, et cumque fugiat repellendus quae iusto reiciendis.
                                    Ratione accusamus, eligendi dolores, laboriosam beatae vitae.</p>
                            </div>
                            <div class="white-space-2">
                                <span class="light">Jessica Williams</span>
                                <br>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape tiny-icon"></span>
                                <span class="flaticon-shape-1 tiny-icon"></span>
                                <br><br>
                                <p>Nice place, great food!</p>
                                <p class="light">Perferendis qui architecto, quos nesciunt, iusto earum labore dolores vel, ducimus nulla dolorum. Voluptas, hic! Distinctio dolorum, dolorem ipsam blanditiis, repellendus necessitatibus.Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Ad quod soluta, fugit sit enim assumenda nihil veniam harum fugiat molestiae. Veniam est nam voluptates quam officia quisquam, nobis odio pariatur!</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- END OF ABOUT -->

        <!-- CONTACT US -->
        <section id="contact-us" class="white-space-5 light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 white-space-2 text-center">
                        <h2 class="light dark-grey underline uppercase">Kapcsolatok</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <!-- <div class="col-xs-12">
                                <p class="light text-center-xs text-center-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sit, similique neque, ratione temporibus.</p>
                            </div> -->
                        </div>
                        <div class="row contact-flex">
                            <div class="col-sm-6">
                                <h4 class="white-space-2 colored">Elérhetőség</h4>
                                <ul class="list-unstyled">
                                    <li><i class="flaticon-technology"></i> 06 30/944-06-42</li>
                                    <li><i class="flaticon-mail"></i> beckerkuria@gmail.com</li>
                                    <li><i class="flaticon-location-pin"></i> 8252 Balatonszepezd<br>Árpád utca 9.</li>
                                </ul>
                            </div>
                            <!-- <div class="col-sm-6">
                                <h4 class="white-space-2 colored">Branch Office</h4>
                                <ul class="list-unstyled">
                                    <li><i class="flaticon-technology"></i> 323-520-1038</li>
                                    <li><i class="flaticon-mail"></i> example2@gmail.com</li>
                                    <li><i class="flaticon-location-pin"></i> 2133 Evergreen Lane<br>Alhambra, California</li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-xs-12 white-space-2">
                                <ul id="social-media-contact" class="list-inline">
                                    <li>
                                        <a href="#." class="flaticon-facebook-logo-in-circular-button-outlined-social-symbol"></a>
                                    </li>
                                    <li>
                                        <a href="#." class="flaticon-twitter-circular-button"></a>
                                    </li>
                                    <li>
                                        <a href="#." class="flaticon-google-plus-circular-button"></a>
                                    </li>
                                    <li>
                                        <a href="#." class="flaticon-pinterest-social-visual-website-logotype"></a>
                                    </li>
                                    <li>
                                        <a href="#." class="flaticon-linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#." class="flaticon-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-6">
                        <h4 class="colored uppercase"><i class="flaticon-edit"></i>Időpont egyeztetés</h4>
                        <!-- <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic earum, nulla enim.</p> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Teljes Név">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email-cím">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="contact-number" class="form-control" placeholder="Telefonszám">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" class="form-control" placeholder="Lakcím">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="contact-number" class="form-control" placeholder="Tárgy">
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="7" placeholder="Üzenet"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="button large dark">Küldés</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OF CONTACT US -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2728.570720556924!2d17.661212316178283!3d46.8521399791419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769af52b02a583b%3A0x340198bb1cc20f83!2sBalatonszepezd%2C%20%C3%81rp%C3%A1d%20u.%209%2C%208252!5e0!3m2!1shu!2shu!4v1589880594677!5m2!1shu!2shu" height="500px" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- END OF SITE WRAPPER -->

    <!-- MODALS -->
    <div class="modal fade" id="room-details-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
                    <h4 class="modal-title light">Szoba</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div id="room-images" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#room-images" data-slide-to="0" class="active"></li>
                                    <li data-target="#room-images" data-slide-to="1"></li>
                                    <li data-target="#room-images" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="assets/images/default/szoba1.jpg" alt="rooms-carousel">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/default/szoba2.jpg" alt="rooms-carousel">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/default/szobafurdo.jpg" alt="rooms-carousel">
                                    </div>
                                </div>

                                <a class="left carousel-control" href="#room-images" role="button" data-slide="prev">
                                    <span class="arrow flaticon-back" aria-hidden="true"></span>
                                </a>
                                <a class="right carousel-control" href="#room-images" role="button" data-slide="next">
                                    <span class="arrow flaticon-next" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="white-space-2"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>36.000 Ft<small>/2fő/éj</small></h2>
                                    <p class="light">Az ár nem tartalmazza egyik étkezést sem.</p>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <button class="button ghost white hotel-book-now" data-toggle="modal" data-target="#booking-form-modal">Book Now</button>
                                </div> -->
                            </div>
                            <div class="white-space-2"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Szobafelszereltség</h4>
                                    <p class="light text-justify">Fürdőszoba, íróasztal, 4k okos TV, hajszárító, zuhany, WC, törölközők</p>
                                    <div class="white-space-2"></div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="">Max létszám</h4>
                                    <span class="flaticon-man-silhouette"></span>
                                    <span class="flaticon-man-silhouette"></span>
                                    <!-- <span class="flaticon-man-silhouette"></span>
                                    <span class="flaticon-man-silhouette"></span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Leírás</h4>
                            <p class="light">A kúriában 6 darab,20 nm-es két ágyas szoba található, melyekhez 3 nm-es zuhanyzós fürdőszoba
tartozik.<br> A feltüntetett árak az idegenforgalmi és áruforgalmi adót tartalmazzák.</p>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <!-- <div class="row">
                        <div class="col-xs-12">
                            <h4>Fizetési feltételek</h4>
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci accusamus unde omnis qui sint at perspiciatis expedita deleniti maxime odio velit deserunt, reiciendis suscipit id maiores, hic dicta rerum. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Harum quibusdam nihil voluptatum aliquam voluptates laboriosam magni commodi impedit nulla, neque officia sequi facere, dignissimos magnam vero ratione non eveniet tempora!</p>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Lemondási feltételek</h4>
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae fugit ipsum natus neque numquam debitis quis, nihil. Sint laborum porro, perspiciatis illum, pariatur obcaecati quia aliquam officia consequatur voluptatibus
                                impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, ducimus cumque nulla. Voluptatem eligendi nihil laborum cupiditate adipisci aliquam temporibus voluptatibus quo blanditiis aperiam quaerat, expedita,
                                magni voluptates delectus at.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="room-details-modal2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
                    <h4 class="modal-title light">Lakosztály</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div id="room-images" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#room-images" data-slide-to="0" class="active"></li>
                                    <li data-target="#room-images" data-slide-to="1"></li>
                                    <li data-target="#room-images" data-slide-to="2"></li>
                                    <li data-target="#room-images" data-slide-to="3"></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="assets/images/default/lakosztaly.jpg" alt="rooms-carousel">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/default/lakosztaly2.jpg" alt="rooms-carousel">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/default/lakosztaly3.jpg" alt="rooms-carousel">
                                    </div>
                                    <div class="item">
                                        <img src="assets/images/default/furdolakosztaly.jpg" alt="rooms-carousel">
                                    </div>
                                </div>

                                <a class="left carousel-control" href="#room-images" role="button" data-slide="prev">
                                    <span class="arrow flaticon-back" aria-hidden="true"></span>
                                </a>
                                <a class="right carousel-control" href="#room-images" role="button" data-slide="next">
                                    <span class="arrow flaticon-next" aria-hidden="true"></span>
                                </a>
                            </div>
                            <div class="white-space-2"></div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>50.000 Ft<small>/2fő/éj</small></h2>
                                    <p class="light">Az ár az étkezéseket nem tartalmazza.</p>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <button class="button ghost white hotel-book-now" data-toggle="modal" data-target="#booking-form-modal">Book Now</button>
                                </div> -->
                            </div>
                            <div class="white-space-2"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Szobafelszereltség</h4>
                                    <p class="light text-justify">Fürdőszoba, íróasztal, 4k okos TV, hajszárító, zuhany, WC, törölközők, reggeli elkészítésére alkalmas eszközök: Nespresso kapszulás kávéfőző,
vízforraló, pirítós sütő, hűtőszekrény, tányérok, poharak, evőeszközök</p>
                                    <div class="white-space-2"></div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="">Max létszám</h4>
                                    <span class="flaticon-man-silhouette"></span>
                                    <span class="flaticon-man-silhouette"></span>
                                    <span class="flaticon-man-silhouette"></span>
                                    <span class="flaticon-man-silhouette"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Leírás</h4>
                            <p class="light text-justify">A kúriában 3 darab, 35-45 nm közötti, két légteres lakosztály található, melyekhez 3-5 nm-es
zuhanyzós fürdőszoba tartozik. A hálószobában kétszemélyes franciaágy, míg a nappaliban kihúzható
kanapé van elhelyezve, mely maximum két, 14 éven aluli személy számára vehető igénybe. A
teraszon kerti garnitúra található.<br> A feltüntetett árak az idegenforgalmi és áruforgalmi adót tartalmazzák.</p>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <!-- <div class="row">
                        <div class="col-xs-12">
                            <h4>Fizetési feltételek</h4>
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci accusamus unde omnis qui sint at perspiciatis expedita deleniti maxime odio velit deserunt, reiciendis suscipit id maiores, hic dicta rerum. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit. Harum quibusdam nihil voluptatum aliquam voluptates laboriosam magni commodi impedit nulla, neque officia sequi facere, dignissimos magnam vero ratione non eveniet tempora!</p>
                        </div>
                    </div>
                    <div class="white-space-2"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Lemondási feltételek</h4>
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae fugit ipsum natus neque numquam debitis quis, nihil. Sint laborum porro, perspiciatis illum, pariatur obcaecati quia aliquam officia consequatur voluptatibus
                                impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, ducimus cumque nulla. Voluptatem eligendi nihil laborum cupiditate adipisci aliquam temporibus voluptatibus quo blanditiis aperiam quaerat, expedita,
                                magni voluptates delectus at.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="houserule" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
                    <h4 class="modal-title light">Bekker Kúria Házirend</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    </div>
                    <div class="white-space-2"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Kedves Vendégünk!</h4>
                            <p class="light">Szeretettel üdvözöljük a Bekker Kúriában! Házirendünk célja, hogy minden Vendégünk a legnagyobb nyugalomban tölthesse el pihenését, ezért kérjük az alábbiak betartását!</p>
                            <p class="light">1. Szobája az érkezés napján 14 órától az elutazás napján 10 óráig áll rendelkezésére.</p>
                            <p class="light">2. Szeretnénk, ha vendégeink az adminisztrációból minél kevesebbet érzékelnének, ezért javasoljuk, hogy már bejelentkezéskor egyeztesse a házigazdával, hogy számláját miként kívánja rendezni, ezáltal is segítve, gördülékenyebbé téve a kijelentkezést. Kérjük, vegye figyelembe, hogy egy szobához egy szobakulcsot tudunk kiadni, melynek esetleges elvesztése esetén 8000 Ft-os pótdíjat kell felszámolnunk.</p>
                            <p class="light">3. Célunk, hogy tökéletes pihenést, kikapcsolódást nyújthassunk vendégeinknek. Kérjük, hogy tartsák tiszteletben a többi vendég nyugalmát. 22 óra után kérjük, fokozottan figyeljenek erre.</p>
                            <p class="light">4. A Kúriához őrzés nélküli parkoló tartozik az épület udvarában. A gépjárműért, illetve a benne elhelyezett tárgyakért a Kúria nem tud felelősséget vállalni. Amennyiben szeretné értéktárgyait biztonságban tudni, kérjük, használja a szobájában található széfet, amely térítésmentesen áll rendelkezésére. A szobákban hagyott értéktárgyakért a Kúria nem vállal felelősséget.</p>
                            <p class="light">5. Szeretnénk tájékoztatni, hogy a hatályos törvények értelmében a 18. életévüket be nem töltött vendégek nem fogyaszthatnak szeszes italt a Kúria területén.</p>
                            <p class="light">6. Szeretnénk felhívni figyelmét, hogy a szobákban főzés, vasalás, dohányzás, füstölő- és gyertyagyújtás, valamint minden további tűz- és balesetveszélyes tevékenység szigorúan tilos! Panziónk nemdohányzó, így dohányozni csak az arra kijelölt helyeken – a szabadtéri teraszokon – lehet. Aki a házirend eme pontját nem tartja tiszteletben, az 50 000 Ft megtérítésére kötelezhető a kúria felé. Az okozott kár súlyosságának függvényében ez az összeg változhat.</p>
                            <p class="light">7. Kérjük, a Kúria épületében elhelyezett kézi tűzjelző berendezéseket szigorúan csak indokolt esetben használja. Szeretnénk tájékoztatni, hogy az indokolatlan használatból eredő, a szállás területén okozott károkért annak okozója, vagy törvényes képviselője anyagi felelősséggel tartozik.</p>
                            <p class="light">8. Kérjük, amennyiben bármilyen műszaki, technikai problémát észlel, haladéktalanul jelezze személyesen vagy telefonon, hogy az elhárításáról minél hamarabb intézkedhessünk.</p>
                            <p class="light">9. Vendégeink zavartalan pihenése érdekében a Kúriába háziállat nem hozható be.</p>
                            <p class="light">10. A takarítást naponta 10-14 óra között történik. Minden nap bemegyünk ellenőrizni a szobákat, és kiüríteni a szemetet ha ez ellen kifogása van, vagy bármire szüksége van, kérjük jelezze nekünk! Hosszabb tartózkodás esetén 3 naponta nagytakarítást végzünk. Kérjük, hogy a háztartási gépeket ne mozdítsa el a helyéről! Amennyiben a szoba berendezési tárgyaiban kárt okoz, az térítést von maga után. A lakosztályokhoz általunk biztosított törölközőket kérjük, hogy kint a kertben, vagy a Kúria területén kívül ne használja! Ha törölköző csere szükséges, kérjük, hogy dobja földre a törölközőt! A törölközőket TILOS hajfestésre, takarításhoz, vagy egyéb más módon, nem rendeltetésszerűen használni! Ennek be nem tartása, felárat von maga után. Távozáskor a szobákat, fürdőszobát leellenőrizzük. Amennyiben úgy ítéljük meg, extra takarítási díjat számolunk, melynek mértéke változó.</p>
                            <h4>Amennyiben valamit otthon felejtett, az alábbi eszközökkel tudjuk kisegíteni:</h4>
                            <p class="light">-Fogkefe X Ft</p>
                            <p class="light">-Borotva X Ft</p>
                            <p class="light">Stb.</p>
                            <h4>Térítés ellenében az alábbi szolgáltatások vehetőek igénybe:</h4>
                            <p class="light">-Kerékpár kölcsönzés X Ft/nap</p>
                            <p class="light">-Kajak kölcsönzés X Ft/nap</p>
                            <p class="light">Amennyiben a Házirendben leírtak nem valósulnak meg, kénytelenek vagyunk a tartózkodás teljes ellenértékének megfizetése mellett a foglalást visszamondani vagy Önt a szálláshely korábbi elhagyására felszólítani.
A Házirend által nem szabályozott kérdésekben a Ptk. vonatkozó jogszabályai az irányadók. Kérjük, esetleges panaszát, észrevételét itt tartózkodása alatt jelezze, ugyanis csak ebben az esetben tudjuk figyelembe venni, illetve ha szükséges, kompenzálni. Utólagos reklamációt nem áll módunkban elfogadni.
Amennyiben a fentieken túl kérdése merül fel, kérjük, forduljon hozzánk bizalommal.</p>
                            <h4>Kellemes időtöltést és jó pihenést kívánunk!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="booking-form-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="flaticon-cross-out"></span></button>
                    <h4 class="modal-title light"><span class="flaticon-calendar"></span> Booking Form</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Arrival" data-provide="datepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Departure" data-provide="datepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
										<option disabled selected>Adults</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
										<option disabled selected>Children</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
										<option disabled selected>Room</option>
										<option>Deluxe A</option>
										<option>Deluxe B</option>
										<option>Twin</option>
										<option>Double A</option>
										<option>Double B</option>
										<option>Double C</option>
										<option>Suite</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control">
										<option disabled selected>Include Lunch</option>
										<option>Yes</option>
										<option>No</option>
									</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" placeholder="Special Requests"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
											<input type="checkbox"> <span class="light">I agree to the Terms &amp; Conditions</span>
										</label>
                                    </div>
                                    <a href="#." class="button ghost white">Confirm and Book</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPTS -->
    <!-- JQUERY -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- BOOTSTRAP DATEPICKER -->
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- VEGAS BACKGROUND SLIDESHOW -->
    <script src="assets/plugins/vegas/vegas.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="assets/plugins/owl/owl.carousel.min.js"></script>
    <!-- FILTERIZR -->
    <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- WAYPOINTS -->
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <!-- GOOGLE MAPS API JAVASCRIPT -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefAYkn-vDsdbsV73K9T91Tl9abFQLw-A"></script> -->

    <!-- AURELIA JS -->
    <script src="assets/js/aurelia.js"></script>
</body>

</html>