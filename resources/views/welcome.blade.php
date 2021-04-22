<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Металлолом Запорожье</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
            body {
                font-family: Roboto,  Arial, sans-serif;
                background: #ffff00;
            }
            /* call batton */
            .callback-bt {
                background:#38a3fd;
                border:2px solid #38a3fd;
                border-radius:50%;
                box-shadow:0 8px 10px rgba(56,163,253,0.3);
                cursor:pointer;
                height:68px;
                text-align:center;
                width:68px;
                position: fixed;
                right: 8%;
                bottom: 18%;
                z-index:999;
                transition:.3s;
                -webkit-animation:hoverWave linear 1s infinite;
                animation:hoverWave linear 1s infinite;
            }

            .callback-bt .text-call{
                height:68px;
                width:68px;
                border-radius:50%;
                position:relative;
                overflow:hidden;
            }

            .callback-bt .text-call span {
                text-align: center;
                color:#38a3fd;
                opacity: 0;
                font-size: 0;
                position:absolute;
                right: 4px;
                top: 22px;
                line-height: 14px;
                font-weight: 600;
                text-transform: uppercase;
                transition: opacity .3s linear;
                font-family: 'montserrat', Arial, Helvetica, sans-serif;
            }

            .callback-bt .text-call:hover span {
                opacity: 1;
                font-size: 11px;
            }
            .callback-bt:hover i {
                display:none;
            }

            .callback-bt:hover {
                z-index:1;
                background:#fff;
                color:transparent;
                transition:.3s;
            }
            .callback-bt:hover i {
                color:#38a3fd;
                font-size:40px;
                transition:.3s;
            }
            .callback-bt i {
                color:#fff;
                font-size:34px;
                transition:.3s;
                line-height: 66px;transition: .5s ease-in-out;
            }

            .callback-bt i  {
                animation: 1200ms ease 0s normal none 1 running shake;
                animation-iteration-count: infinite;
                -webkit-animation: 1200ms ease 0s normal none 1 running shake;
                -webkit-animation-iteration-count: infinite;
            }

            @-webkit-keyframes hoverWave {
                0% {
                    box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 0 rgba(56,163,253,0.2),0 0 0 0 rgba(56,163,253,0.2)
                }
                40% {
                    box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 15px rgba(56,163,253,0.2),0 0 0 0 rgba(56,163,253,0.2)
                }
                80% {
                    box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 30px rgba(56,163,253,0),0 0 0 26.7px rgba(56,163,253,0.067)
                }
                100% {
                    box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 30px rgba(56,163,253,0),0 0 0 40px rgba(56,163,253,0.0)
                }
            }@keyframes hoverWave {
                 0% {
                     box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 0 rgba(56,163,253,0.2),0 0 0 0 rgba(56,163,253,0.2)
                 }
                 40% {
                     box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 15px rgba(56,163,253,0.2),0 0 0 0 rgba(56,163,253,0.2)
                 }
                 80% {
                     box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 30px rgba(56,163,253,0),0 0 0 26.7px rgba(56,163,253,0.067)
                 }
                 100% {
                     box-shadow:0 8px 10px rgba(56,163,253,0.3),0 0 0 30px rgba(56,163,253,0),0 0 0 40px rgba(56,163,253,0.0)
                 }
             }

            /* animations icon */

            @keyframes shake {
                0% {
                    transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -webkit-transform: rotateZ(0deg);
                }
                10% {
                    transform: rotateZ(-30deg);
                    -ms-transform: rotateZ(-30deg);
                    -webkit-transform: rotateZ(-30deg);
                }
                20% {
                    transform: rotateZ(15deg);
                    -ms-transform: rotateZ(15deg);
                    -webkit-transform: rotateZ(15deg);
                }
                30% {
                    transform: rotateZ(-10deg);
                    -ms-transform: rotateZ(-10deg);
                    -webkit-transform: rotateZ(-10deg);
                }
                40% {
                    transform: rotateZ(7.5deg);
                    -ms-transform: rotateZ(7.5deg);
                    -webkit-transform: rotateZ(7.5deg);
                }
                50% {
                    transform: rotateZ(-6deg);
                    -ms-transform: rotateZ(-6deg);
                    -webkit-transform: rotateZ(-6deg);
                }
                60% {
                    transform: rotateZ(5deg);
                    -ms-transform: rotateZ(5deg);
                    -webkit-transform: rotateZ(5deg);
                }
                70% {
                    transform: rotateZ(-4.28571deg);
                    -ms-transform: rotateZ(-4.28571deg);
                    -webkit-transform: rotateZ(-4.28571deg);
                }
                80% {
                    transform: rotateZ(3.75deg);
                    -ms-transform: rotateZ(3.75deg);
                    -webkit-transform: rotateZ(3.75deg);
                }
                90% {
                    transform: rotateZ(-3.33333deg);
                    -ms-transform: rotateZ(-3.33333deg);
                    -webkit-transform: rotateZ(-3.33333deg);
                }
                100% {
                    transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -webkit-transform: rotateZ(0deg);
                }
            }

            @-webkit-keyframes shake {
                0% {
                    transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -webkit-transform: rotateZ(0deg);
                }
                10% {
                    transform: rotateZ(-30deg);
                    -ms-transform: rotateZ(-30deg);
                    -webkit-transform: rotateZ(-30deg);
                }
                20% {
                    transform: rotateZ(15deg);
                    -ms-transform: rotateZ(15deg);
                    -webkit-transform: rotateZ(15deg);
                }
                30% {
                    transform: rotateZ(-10deg);
                    -ms-transform: rotateZ(-10deg);
                    -webkit-transform: rotateZ(-10deg);
                }
                40% {
                    transform: rotateZ(7.5deg);
                    -ms-transform: rotateZ(7.5deg);
                    -webkit-transform: rotateZ(7.5deg);
                }
                50% {
                    transform: rotateZ(-6deg);
                    -ms-transform: rotateZ(-6deg);
                    -webkit-transform: rotateZ(-6deg);
                }
                60% {
                    transform: rotateZ(5deg);
                    -ms-transform: rotateZ(5deg);
                    -webkit-transform: rotateZ(5deg);
                }
                70% {
                    transform: rotateZ(-4.28571deg);
                    -ms-transform: rotateZ(-4.28571deg);
                    -webkit-transform: rotateZ(-4.28571deg);
                }
                80% {
                    transform: rotateZ(3.75deg);
                    -ms-transform: rotateZ(3.75deg);
                    -webkit-transform: rotateZ(3.75deg);
                }
                90% {
                    transform: rotateZ(-3.33333deg);
                    -ms-transform: rotateZ(-3.33333deg);
                    -webkit-transform: rotateZ(-3.33333deg);
                }
                100% {
                    transform: rotateZ(0deg);
                    -ms-transform: rotateZ(0deg);
                    -webkit-transform: rotateZ(0deg);
                }
            }
            /* end call batton */
            body {
                margin: 0;
            }
            a {
                text-decoration: none;
            }
            .flex-row {
                display: flex;
                height: fit-content;
                justify-content: center;
            }
            .flex-column {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
            }
            .first-screen {
                height: 100vh;
                width: 100%;
                z-index: 999;
            }
            .banner-content:before {
                content: "";
                height: 90vh;
                width: 100%;
                background-image: url("public/images/first-banner.jpg");
                /*background-image: url(../../../images/first-banner3.jpg);*/
                background-size: 100% 100%;
                opacity: 0.3;
                position: absolute;
                top: 0;
                left: 0;
                /*background-image: url();*/
                /*background-size: cover;*/
                /*-webkit-background-size: cover;*/
                /*-moz-background-size: cover;*/
                /*-o-background-size: cover;*/
                /*background-repeat: no-repeat;*/
                /*background-position: center center;*/
                /*text-align: center;*/
                /*vertical-align: middle;*/
                /*position: relative;*/
                /*background-attachment: fixed;*/
                /*transform: translate3d(0,0,0);*/
                /*-webkit-transform: translate3d(0,0,0);*/
            }
            .modal-container {
                padding-right: 0;
            }
            .header {
                height: 110px;
                background: #000;
                display: flex;
                align-items: center;
                justify-content: space-around;
                /*opacity: 0.5;*/
            }
            .header-title {
                color: #ffffff;
                font-weight: 700;
                letter-spacing: 2px;
                font-size: 24px;
                font-family: 'Roboto',Arial,sans-serif;
            }
            .nav-tab {
                display: flex;
                align-items: center;
                justify-content: space-around;
                color: #ffffff;
                font-size: 18px;
                font-weight: 400;
                font-family: 'Roboto',Arial,sans-serif;
                width: 30%;
            }
            .nav-tab a {
                text-decoration: none;
                color: #FFFFFF !important;
            }
            .phone-number {
                display: flex;
                align-items: center;
                justify-content: space-around;
            }
            .phone-number a {
                color: #000000;
                background-color: #ffffff;
                border-radius: 20px;
                height: 40px;
                font-size: 14px;
                padding-left: 30px;
                padding-right: 30px;
                margin-left: 10px;
                display: flex;
                align-items: center;
            }
            .banner {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 80%;
            }
            .banner-content {
                text-align: left;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: space-between;
                height: inherit;
            }
            h1 {
                color: #222222;
                font-size: 52px;
                font-family: 'Roboto', Arial, sans-serif;
                text-align: left;
            }
            .banner span {
                color: #222222;
                font-size: 22px;
                font-family: 'Roboto', Arial, sans-serif;
                text-align: left;
            }
            .banner-content .services-button {
                max-width: 180px;
            }
            .banner-content .services-button a {
                display: block;
                text-decoration: none;
                color: #222222;
                font-size: 16px;
                font-family: 'Roboto', Arial, sans-serif;
                text-align: center;
                border: 4px solid #222222;
                border-radius: 4px;
                padding: 16px 60px;
            }
            .down-button {
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .down-button i{
                color: #222222;
                font-size: 45px;
                font-weight: bold;
            }
            .services {
                display: flex;
                flex-direction: column;
                /*align-items: center;*/
                justify-content: space-around;
                text-align: center;
                width: 100%;
                height: 100vh;
                background: #ffff00;
            }
            .container {
                background: #ffff00;
            }
            .work-with-us.services {
                height: 50vh;
            }
            .services-title h2 {
                font-size: 42px;
                font-weight: bold;
                font-family: Roboto,  Arial, sans-serif;
                margin: 30px 0;
            }
            .services-description {
                font-size: 24px;
                font-family: Roboto,  Arial, sans-serif;
                text-align: center;
            }
            .services-container {
                display: flex;
                align-items: center;
                justify-content: space-around;
                height: 100%;
            }
            .title-description {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                /*justify-content: space-around;*/
                max-width: 280px;
                height: 100%;
                margin-left: 20px;
            }
            .services-container div {
                display: flex;
                flex-direction: column;
                /*align-items: center;*/
                justify-content: space-around;
            }
            .services-container div div {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: space-around;
            }
            .services-container img {
                width: 380px;
                height: 280px;
                margin-bottom: 30px;
            }
            h3 {
                font-size: 26px;
                font-weight: bold;
                font-family: Roboto, Arial, sans-serif;
            }
            h4 {
                font-size: 20px;
                font-weight: bold;
                font-family: Roboto, Arial, sans-serif;
            }
            .services-container span, .title-description span {
                font-size: 16px;
                font-family: Roboto, Arial, sans-serif;
                text-align: left;
            }
            .services-container a {
                display: block;
                color: #ffffff;
                background-color: #ff822e;
                border-radius: 3px;
                font-size: 16px;
                font-family: Roboto, Arial, sans-serif;
                padding: 15px 40px;
                margin-top: 30px;
            }
            .container, .banner {
                background: #ffff00;
            }
            .circle {
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                background: #ff822e;
                color: #ffffff;
                font-weight: bold;
                font-size: 20px;
                font-family: Roboto, Arial, sans-serif;
                width: 60px;
                height: 60px;
            }
            .work-with-us.services h2 {
                font-size: 42px;
                font-family: Roboto,  Arial, sans-serif;
                margin: 30px 0;
            }
            .plan-work {
                height: 50vh;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                padding: 50px;
                /*margin-top: 20px;*/
            }
            .circle-container, .title-description-container {
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .title-description-container {
                margin-top: 50px;
            }
            /*.elem-border::before {*/
            /*    content: "";*/
            /*    border-top: 2px solid #ff822e;*/
            /*    position: relative;*/
            /*    width: 100%;*/
            /*    top: 50px*/
            /*}*/
            .accordion {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .accordion .services-title {
                text-align: center;
                padding: 0 10px;
            }
            .accordion .accordion-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 0 20px;
                width: 100%;
            }
            .accordion-sections-content {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                padding: 0 15px;
                background-color: #ffc107;
                width: 60%;
            }
            .accordion-section {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }
            .accordion-section-first {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 15px 0;
                width: 100%;
            }
            .border_bottom {
                border-bottom: 1px solid #ffffff;
                transition:all 1s;
            }
            .accordion-section-second {
                text-align: left;
                padding: 15px 0;
                display: none;
            }
            .accordion .accordion-content h4 {
                text-align: left;
            }
            .circle.rotate i {
                font-size: 30px;
                transform: rotate(45deg);
                transition:all 1s;
            }
            .circle i {
                font-size: 30px;
                transition:all 1s;
            }
            @media (max-width: 1200px) {
                .work-with-us.services {
                    height: 70vh;
                }
            }
            @media (max-width: 992px) {
                .work-with-us.services {
                    height: initial;
                }
                .work-with-us .flex-row {
                    height: 150px;
                    min-width: 320px;
                    margin-bottom: 20px;
                }
                .plan-work {
                    padding: 10px;
                }
                .plan-work-content {
                    display: flex;
                    justify-content: space-around;
                    align-items: initial;
                    height: 100vh;
                }
                .circle-container, .title-description-container {
                    flex-direction: column;
                }
            }
            @media (max-width: 767px) {
                .header {
                    height: 100vh;
                }
                .header, .header-title, .nav-tab {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: space-around;
                    background: #ffff00;
                    color: #222222;
                }
                .nav-tab a {
                    font-weight: bold;
                    font-family: Roboto,  Arial, sans-serif;
                    margin-bottom: 25px;
                    color: #222222 !important;
                    text-decoration: none;
                }
                .phone-number a {
                    margin-bottom: 20px;
                    width: auto;
                }
                .phone-number {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: space-around;
                }
                .banner {
                    height: 70vh;
                    padding: 0 15px;
                }
                .banner-content div {
                    margin-top: 30px;
                }
                h1 {
                    font-size: 30px;
                    font-family: Roboto,  Arial, sans-serif;
                    line-height: 40px;
                }
                .banner span {
                    font-size: 20px;
                    font-family: Roboto,  Arial, sans-serif;
                    line-height: 30px;
                }
                .banner-content .services-button {
                    max-width: 150px;
                }
                .banner-content .services-button a {
                    padding: 12px 40px;
                }
                .banner-content:before {
                    height: 70vh;
                    top: unset;
                }
                .services {
                    height: auto;
                    padding-top: 20px;
                    background: #ffff00;
                }
                .services div a {
                    margin-bottom: 20px;
                }
                .services-container {
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    justify-content: space-around;
                    height: 100%;
                }
                .services-container div {
                    align-items: center;
                }
                .services-container img{
                    width: 280px;
                    height: 230px;
                    margin: 20px 0;
                }
                .services-description {
                    padding: 0 15px;
                }
                h3 {
                    font-size: 24px;
                    font-family: Roboto,  Arial, sans-serif;
                }
                .work-with-us .flex-row {
                    height: 150px;
                    min-width: 320px;
                    margin-bottom: 20px;
                }
                .title-description {
                    max-width: 230px;
                    padding-right: 0;
                }
                .work-with-us {
                    padding-right: 5px;
                }
                .circle  {
                    width: 30px;
                    height: 30px;
                }
                .accordion-sections-content {
                    width: 100%;
                }
                .accordion .services-title h2 {
                    font-size: 38px;
                }
                .circle i, .circle.rotate i {
                    font-size: 20px;
                }
            }
            @media (max-width: 340px) {
                .header, .header-title {
                    font-size: 20px;
                    font-family: Roboto,  Arial, sans-serif;
                }
                .nav-tab span {
                    font-size: 15px;
                    font-family: Roboto,  Arial, sans-serif;
                }
                .circle  {
                    width: 30px;
                    height: 30px;
                }
            }
        </style>
    </head>
    <body>
    <a href="tel:+380961517175">
    <div type="button" class="callback-bt">
        <div class="text-call">
            <i class="fa fa-phone"></i>
            <span>Заказать<br>звонок</span>
        </div>
    </div>
    </a>
        <div class="first-screen">
            <section class="header">
                <div class="header-title"><span>Запорожье Металлолом</span></div>
                <div class="nav-tab">
                    <a href="#our-services">Услуги</a>
                    <a href="#why-we">Почему мы</a>
                    <a href="#price">Цены</a>
                    <a href="#contact">Контакты</a>
                </div>
                <div class="phone-number">
                    <a href="tel:+380961517175">+380961517175</a>
                    <a href="tel:+380663881603">+380663881603</a>
                </div>
            </section>
            <section class="banner">
                <div class="banner-content">
                    <div>
                        <h1>Прием и вывоз металлолома <br>в Запорожье</h1>
                    </div>
                    <div>
                        <span>Любые виды <b>металлолома</b>. Самовывоз, демонтаж <br>Оплата на месте – звоните!</span>
                    </div>
                    <div class="services-button"><a href="#">Услуги</a></div>
                    <div class="down-button"><i class="far fa-angle-down"></i></div>
                </div>
            </section>
            <section class="services">
                <div id="our-services" class="services-title">
                    <h2>Наши услуги</h2>
                </div>
                <div class="services-description">
                    Мы приедем к вам со своими весами,<br> автотранспортом, резчиками и грузчиками.<br> Расчет на месте.
                </div>
                <div class="services-container">
                    <div>
                        <div>
                            <img src="public/images/photo-auto.jpg">
                            <h3>Вывоз металлолома</h3>
                            <h4>Бесплатно</h4>
                            <span>Купим ваш металлолом.<br> Погрузка и вывоз - бесплатно.</span>
                            <a href="#price">Рассчитать стоимость</a>
                        </div>
                    </div>
                    <div>
                        <img src="public/images/photo-rezak.jpg">
                        <div>
                            <h3>Демонтаж металлолома</h3>
                            <h4>Бесплатно</h4>
                            <span>Наша бригада бесплатно произведет<br> необходимые демонтажные работы.</span>
                            <a href="#price">Рассчитать стоимость</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work-with-us services">
                <div id="why-we" class="services-title">
                    <h2 class="">
                        Почему работать именно с нами?
                    </h2>
                </div>
                <div class="col-12 row">
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">1</div>
                        <div class="title-description">
                            <h4>Цена известна заранее</h4>
                            <span>
                                Укажите свой номер телефона, мы свяжемся с вами и сообщим ориентировочную
                                стоимость лома уже через пару минут.
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">2</div>
                        <div class="title-description">
                            <h4>Полный комплекс</h4>
                            <span>
                                Самостоятельно организуем сбор, сортировку и транспортировку лома,
                                а также убираем территорию после окончания всех работ.
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">3</div>
                        <div class="title-description">
                            <h4>Точность</h4>
                            <span>
                                Используем современную технику и высокоточные опломбированные весы.
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">4</div>
                        <div class="title-description">
                            <h4>Высокие цены</h4>
                            <span>
                                Предлагаем оплату за собранное вторсырье по высоким ценам.
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">5</div>
                        <div class="title-description">
                            <h4>Нал/Безнал</h4>
                            <span>
                                Работаем как по безналичному так и за наличный расчет.
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 flex-row">
                        <div class="circle">6</div>
                        <div class="title-description">
                            <h4>Оплата на месте</h4>
                            <span>
                                Производим оплату сразу после взвешивания.
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <div id="price" class="container">
                <table class="table w-100">
                    <thead class="thead-dark">
                    <tr class="">
                        <th class="pl-5" scope="col">#</th>
                        <th class="w-75" scope="col">Название</th>
                        <th class="pr-5 last" scope="col">Цена</th>
{{--                        <th scope="col">Редактировать</th>--}}
{{--                        <th scope="col">Удалить</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prices as $key => $prise)
                        <tr class=" bg-warning text-dark">
                            <th class="pl-5" scope="row">{{$key}}</th>
                            <td class="w-75">{{$prise->name}}</td>
                            <td class="pr-5 last">{{$prise->cost}}</td>
{{--                            <td class=""><div><a href="{{ url('/admin-metallolom/edit/' . $prise->id) }}" class="btn btn-primary btn-sm  action-button">Редактировать</a></div></td>--}}
{{--                            <td class=""><div><a href="{{ url('/admin-metallolom/destroy/' . $prise->id) }}" class="btn btn-danger btn-sm  action-button">Удалить</a></div></td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <style>
                .last {
                    text-align: end;
                }
                @media (max-width: 767px) {
                    .container {
                        /*width: 300px;*/
                    }
                    table.table {
                        display: inline-block;
                        overflow: auto;
                        max-width: 100%;
                    }
                }

            </style>
            <section class="plan-work work-with-us services">
                <div class="services-title"><h2>Как мы работаем?</h2></div>
                <div class="plan-work-content">
                    <div class="circle-container">
                        <div class="circle elem-border">1</div>
                        <div class="circle elem-border">2</div>
                        <div class="circle elem-border">3</div>
                        <div class="circle elem-border">4</div>
                    </div>
                    <div class="title-description-container">
                        <div class="title-description">
                            <h4>Заявка</h4>
                            <span>
                                Заявка по телефону или через сайт.
                            </span>
                        </div>
                        <div class="title-description">
                            <h4>Расчет стоимости</h4>
                            <span>
                                Обговариваем условия и цену на ваш объем.
                            </span>
                        </div>
                        <div class="title-description">
                            <h4>Выполнение работ</h4>
                            <span>
                                Приезжают наши сотрудники и необходимая техника. Демонтируем, режем, грузим лом.
                            </span>
                        </div>
                        <div class="title-description">
                            <h4>Оплата</h4>
                            <span>
                                Взвешиваем лом и оплачиваем наличными или безналично.
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="accordion">
                <div class="services-title"><h2>Самые важные вопросы и ответы на них</h2></div>
                <div class="accordion-content">
                    <div class="accordion-sections-content">
                        <div class="accordion-section">
                            <div class="accordion-section-first border_bottom">
                                <div class=""><h4>Какой минимальный<br> объем для вывоза?</h4></div>
                                <div class="circle rotate"><i class="fal fa-times"></i></div>
                            </div>
                            <div class="accordion-section-second">100 кг.</div>
                        </div>
                        <div class="accordion-section">
                            <div class="accordion-section-first border_bottom">
                                <div class=""><h4>Возможна ли работа<br> по договору?</h4></div>
                                <div class="circle rotate"><i class="fal fa-times"></i></div>
                            </div>
                            <div class="accordion-section-second">Да, мы работаем по безналичному расчету.</div>
                        </div>
                        <div class="accordion-section">
                            <div class="accordion-section-first border_bottom">
                                <div class=""><h4>Работаете ли вы по<br> Запорожской области?</h4></div>
                                <div class="circle rotate"><i class="fal fa-times"></i></div>
                            </div>
                            <div class="accordion-section-second">Конечно. К вам приедут наши сотрудники и необходимая техника.</div>
                        </div>
                        <div class="accordion-section">
                            <div class="accordion-section-first border_bottom">
                                <div class=""><h4>Вы можете приехать и<br> забрать мой металлолом?</h4></div>
                                <div class="circle rotate"><i class="fal fa-times"></i></div>
                            </div>
                            <div class="accordion-section-second">Да, мы приезжаем с весами, специальной техникой и грузчиками. Расчет на месте.</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <script>
        $(document).on('click', 'a', function (e) {
            // e.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 700);
        })
        $(document).on('click', '.accordion-section-first', function (e) {
            $(this).parent().find('.accordion-section-second').slideToggle( "slow" );
            $(this).parent().find('.circle').toggleClass("rotate");
            $(this).toggleClass("border_bottom");
            $(this).parent().toggleClass("border_bottom");
        })
    </script>
    </body>
</html>
