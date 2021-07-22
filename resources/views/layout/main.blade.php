<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/wowslider/engine1/style.css" />
    <script type="text/javascript" src="assets/vendor/wowslider/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!-- corousel -->
    <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- END corousel -->
    <title>Poker</title>
</head>

<body>
    <div class="container-fluid p-0 m-0" id="{{$id_page}}">
        <!-- BAR DEKSTOP -->
        <div class="d-none d-lg-flex col-12 p-0 m-0 row justify-content-md-center fixed-top" style="background-image: url('assets/img/website/hederbg.png');" id="header_dekstop">
            <div class="col-xl-9 p-0 m-0">
                <div class="row col-12 pt-2 pb-2 m-0">
                    <div class="col-3">
                        <img class="col-12" src="assets/img/website/tpk_logo (1)cccc.png">
                    </div>
                    <div class="col-9 clearfix">
                        <form class="row mt-3 align-items-center float-end">
                            <div class="col-auto m-0 p-0">
                                <div class="input-container">
                                    <input type="text" required="" />
                                    <label>Username</label>
                                </div>
                                <span style="color: transparent;"> a</span>
                            </div>
                            <div class="col-auto m-0 ps-1">
                                <div class="input-container">
                                    <input type="password" required="" />
                                    <label>Password</label>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="iconify" data-icon="carbon:view" data-inline="false"></span></button>
                                </div>
                                <span><a style="font-size: 10px;" href="#">Lupa Kata Sandi?</a></span>
                            </div>
                            <div class="col-auto m-0 ps-1">
                                <div class="input-container">
                                    <input type="text" required="" />
                                    <label>Kode</label>
                                </div>
                                <span style="color: transparent;"> a</span>
                            </div>
                            <div class="col-auto m-0 ps-1" id="captca">
                                <img style="height: 30px" src="assets/img/website/default.png">
                                <button id="button-refresh"><span class="iconify" data-icon="ci:refresh-02" data-inline="false"></span></button>
                            </div>
                            <div class="col-auto m-0 p-0">
                                <button type="submit" class="btn btn-primary btn-sm rounded-pill" id="button-login">Masuk</button>
                                <a href="/daftar" class="btn btn-primary btn-sm rounded-pill" id="button-register">Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 m-0 p-0">
                    <div class="col-12 m-0 p-0 row rounded-pill" id="berita">
                        <div class="col-auto rounded-pill" id="judul">Berita</div>
                        <div class="col"><marquee class="col-12 p-0 m-0">Lorem Ipsum .../..../...</marquee></div>
                    </div>
                </div>
                <div class="col-12 mt-3 p-0"  data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft" id="nav">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false" data-bs-offset="0,-18">Card Games</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row justify-content-md-center col-12 pt-4">
                                    <div class="col-12 m-0 p-0 text-center" id="title">
                                        <a class="col-12 m-0" href="/cardgames">Card Games</a>
                                    </div>
                                    <div class="row justify-content-md-center col-9">
                                        
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/txp.png">
                                                <h5>Poker Klasik</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/txh.png">
                                                <h5>Texas Poker</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/dmb.png">
                                                <h5>Domino QQ</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/dmc.png">
                                                <h5>Ceme</h5>
                                            </a>                                            
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/dbc.png">
                                                <h5>Ceme Fighter</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/mmb.png">
                                                <h5>Bola Tangkas</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/csa.png">
                                                <h5>Big Two</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/txb.png">
                                                <h5>Poker Dealer</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/bjm.png">
                                                <h5>Blackjack</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/3kings 115x115-1611885254.png">
                                                <h5>Three Kings</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/BTN-TEXASPOKERCC-115_12-1556004776.png">
                                                <h5>Joker Dealer</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/BTN-TEXASPOKERCC-115-1597635764.png">
                                                <h5>Adu Q</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/OMAHAPOKER_115x115-1611885243.png">
                                                <h5>Poker Omaha</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/SUPER10_115x115-min-1626747918.png">
                                                <h5>Super Ten</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                data-bs-offset="0,-18">Dingdong</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row justify-content-md-center col-12 pt-4">
                                    <div class="col-12 m-0 p-0 text-center" id="title">
                                        <a class="col-12 m-0" href="/dingdong">Dingdong</a>
                                    </div>
                                    <div class="row justify-content-md-center col-9">
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/DD_36D_CC.png">
                                                <h5>36D</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/DD_24D_CC.png">
                                                <h5>24D</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/DD_12D_CC.png">
                                                <h5>12D</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/DD_SICBO_CC.png">
                                                <h5>Sicbo</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/d_06-1597635666.png">
                                                <h5>Black Red</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/dt.png">
                                                <h5>Dragon Tiger</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/48d.png">
                                                <h5>48D</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/pd.png">
                                                <h5>Poker Dice</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                data-bs-offset="0,-18">Togel</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row justify-content-md-center col-12 pt-4">
                                    <div class="col-12 m-0 p-0 text-center" id="title">
                                        <a class="col-12 m-0" href="#">Togel</a>
                                    </div>
                                    <div class="row justify-content-md-center col-9">
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/mc.png">
                                                <h5>Cambodia</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/TOGEL_SDY_CC.png">
                                                <h5>Sidney</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/tpkcn115-1605783036.png">
                                                <h5>China</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/115 x 115-1597636008.png">
                                                <h5>Japan</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/tpksgp115-1605783044.png">
                                                <h5>Singapore</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/MONGOLIA_115x115-1621606506.png">
                                                <h5>Togel Mongolia</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/115x115-min-1598946042.png">
                                                <h5>Taiwan</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/TOGEL_HGK_CC.png">
                                                <h5>Hongkong</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                data-bs-offset="0,-18">Sportsbook</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row justify-content-md-center col-12 pt-4">
                                    <div class="col-12 m-0 p-0 text-center" id="title">
                                        <a class="col-12 m-0" href="#">Sportsbook</a>
                                    </div>
                                    <div class="row justify-content-md-center col-9">
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/sportsbook_115x115-1588575510.png">
                                                <h5>Sportsbook SBOBET</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                data-bs-offset="0,-18">Casino</a>
                            <div class="dropdown-menu mega-menu">
                                <div class="row justify-content-md-center col-12 pt-4">
                                    <div class="col-12 m-0 p-0 text-center" id="title">
                                        <a class="col-12 m-0" href="#">Casino</a>
                                    </div>
                                    <div class="row justify-content-md-center col-9">
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/baccarat_115x115-1588575521.png">
                                                <h5>baccarat</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/dragontiger_115x115-1588575526.png">
                                                <h5>Dragon Tiger SBO</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/roulette_115x115-1588575530.png">
                                                <h5>Roulette</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/sicbo_115x115-1588575534.png">
                                                <h5>Sicbo SBO</h5>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <img class="col-12 p-0 m-0" src="assets/img/product/BTN-TEXASPOKERCC- LIVE CASINO(115X115)-1611135505.png">
                                                <h5>Love Casino Pragmatic</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promosi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Referral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bantuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- NAV MOBILE/PAD -->
        <div class="col-12 m-0 p-0 d-block d-lg-none" id="header_mobile">
            <div class="header d-block clearfix text-center p-3">
                <img style="height: 30px" src="assets/img/website/tpk_logo (1)cccc.png">
                
                <div class="btn d-block"> <span class="fas fa-bars"></span> </div>
            </div>
            <nav class="sidebar fixed-top">
                <div class="text"> <img style="height: 25px;" src="assets/img/website/tpk_logo (1)cccc.png"> </div>
                <ul class="main_side">
                    <li class="active"><a href="#">Beranda</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li> <a href="#" id="1">Card Games <span class="fas fa-caret-down"></span> </a>
                        <ul class="item-show-1">
                            <li><a href="/cardgames">Card Games</a></li>
                            <li><a href="#">Poker Klasik</a></li>
                            <li><a href="#">Texas Poker</a></li>
                            <li><a href="#">Domino QQ</a></li>
                            <li><a href="#">Ceme</a></li>
                            <li><a href="#">Ceme Fighter</a></li>
                            <li><a href="#">Bola Tangkas</a></li>
                            <li><a href="#">Big Two</a></li>
                            <li><a href="#">Poker Dealer</a></li>
                            <li><a href="#">Blackjack</a></li>
                            <li><a href="#">Three Kings</a></li>
                            <li><a href="#">Joker Dealer</a></li>
                            <li><a href="#">Adu Q</a></li>
                            <li><a href="#">Poker Omaha</a></li>
                            <li><a href="#">Super Ten</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" id="2">Dingdong <span class="fas fa-caret-down"></span> </a>
                        <ul class="item-show-2">
                            <li><a href="/dingdong">Dingdong</a></li>
                            <li><a href="#">36D</a></li>
                            <li><a href="#">24D</a></li>
                            <li><a href="#">12D</a></li>
                            <li><a href="#">Sicbo</a></li>
                            <li><a href="#">Black Red</a></li>
                            <li><a href="#">Dragon Tiger</a></li>
                            <li><a href="#">48D</a></li>
                            <li><a href="#">Poker Dice</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" id="3">Togel <span class="fas fa-caret-down"></span> </a>
                        <ul class="item-show-3">
                            <li><a href="#">Togel</a></li>
                            <li><a href="#">Cambodia</a></li>
                            <li><a href="#">Sidney</a></li>
                            <li><a href="#">China</a></li>
                            <li><a href="#">Japan</a></li>
                            <li><a href="#">Singapore</a></li>
                            <li><a href="#">Togel Mongolia</a></li>
                            <li><a href="#">Taiwan</a></li>
                            <li><a href="#">Hongkong</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" id="4">Sportsbook <span class="fas fa-caret-down"></span> </a>
                        <ul class="item-show-4">
                            <li><a href="#">Sportsbook</a></li>
                            <li><a href="#">Sportsbook SBOBET</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" id="5">Casino <span class="fas fa-caret-down"></span> </a>
                        <ul class="item-show-5">
                            <li><a href="#">Casino</a></li>
                            <li><a href="#">baccarat</a></li>
                            <li><a href="#">Dragon Tiger SBO</a></li>
                            <li><a href="#">Roulette</a></li>
                            <li><a href="#">Sicbo SBO</a></li>
                            <li><a href="#">Love Casino Pragmatic</a></li>
                        </ul>
                    </li>
                    <li><a href="#">E-Games</a></li>
                    <li><a href="#">Promosi</a></li>
                    <li><a href="#">Referral</a></li>
                    <li><a href="#">Bantuan</a></li>
                </ul>
            </nav>
        </div>
        @yield('content')
        <footer class="col-12 m-0 p-2">
            <div class="col-12 m-0 p-0 row justify-content-center" id="footer">
                <div class="col-lg-9 m-0 p-0">
                    <div class="col-12 m-0 p-0 row">
                        <div class="m-0 p-0 col-lg-6" id="text">
                            © 2011 TEXASPOKER.CC ALL RIGHTS RESERVED V1.9.33-45
                        </div>
                        <div class="m-0 p-0 col-lg-6 d-none d-lg-block" id="sosmed">
                            <a class="d-block float-end rounded-circle m-1" href="#"><span class="iconify" data-icon="dashicons:wordpress"></span></a>
                            <a class="d-block float-end rounded-circle m-1" href="#"><span class="iconify" data-icon="vaadin:youtube"></span></a>
                            <a class="d-block float-end rounded-circle m-1" href="#"><span class="iconify" data-icon="akar-icons:twitter-fill"></span></a>
                            <a class="d-block float-end rounded-circle m-1" href="#"><span class="iconify" data-icon="akar-icons:instagram-fill"></span></a>
                            <a class="d-block float-end rounded-circle m-1" href="#"><span class="iconify" data-icon="brandico:facebook"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="fixed-bottom" id="chatus">
        <div class="col-12 m-0 p-0" id="start">
            <img class="col-12 m-0 p-0" src="assets/img/website/10023TPKbanner.png">
            <div class="col-12 m-0 p-0" id="pesan">
                <form class="col-12 m-0 p-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ketik Pesan Anda Disini"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn" type="submit" id="button-addon2"><span class="iconify"
                                data-icon="fa-regular:paper-plane" data-inline="false"></span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="m-0 p-0" id="pesan_body">
            <div class="col-12">
                <div style="height: 300px; background-color: #283E53;">
                    <div class="col-12 m-0 p-0">
                        <div class="col-12 m-0 p-0 clearfix" id="bar">
                            <a href="#" class="float-end d-block p-1" style="color: white" onclick="hide_body_pesan();"><span
                                    class="iconify" data-icon="fa-regular:window-minimize"></span></a>
                            <a href="#" class="float-end d-block p-1" style="color: white"><span class="iconify"
                                    data-icon="carbon:maximize"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start WOWSlider.com BODY section -->
    <script type="text/javascript" src="assets/vendor/wowslider/engine1/wowslider.js"></script>
    <script type="text/javascript" src="assets/vendor/wowslider/engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <script src="assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>