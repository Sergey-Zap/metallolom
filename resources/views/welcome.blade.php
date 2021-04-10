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
        <style>
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
                width: 30%;
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
            }
            .work-with-us.services {
                height: 50vh;
            }
            .services-title h2 {
                font-size: 42px;
                font-weight: bold;
                font-family: Roboto,  Arial, sans-serif;
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
                font-size: 32px;
                margin: 50px 0;
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
                .nav-tab span {
                    font-weight: bold;
                    margin-bottom: 25px;
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
                    height: 100vh;
                    padding: 0 15px;
                }
                h1 {
                    font-size: 30px;
                    line-height: 40px;
                }
                .banner span {
                    font-size: 20px;
                    line-height: 30px;
                }
                .banner-content .services-button {
                    max-width: 150px;
                }
                .banner-content .services-button a {
                    padding: 12px 40px;
                }
                .banner-content:before {
                    height: 100vh;
                    top: unset;
                }
                .services {
                    height: auto;
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
                h3 {
                    font-size: 24px;
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
            }
            @media (max-width: 340px) {
                .header, .header-title {
                    font-size: 20px;
                }
                .nav-tab span {
                    font-size: 15px;
                }
                .circle  {
                    width: 30px;
                    height: 30px;
                }
            }
        </style>
    </head>
    <body>
        <div class="first-screen">
            <section class="header">
                <div class="header-title"><span>Запорожье Металлолом</span></div>
                <div class="nav-tab">
                    <span>Услуги</span>
                    <span>Почему мы</span>
                    <span>Цены</span>
                    <span>Контакты</span>
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
                <div class="services-title">
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
                            <a href="#">Рассчитать стоимость</a>
                        </div>
                    </div>
                    <div>
                        <img src="public/images/photo-rezak.jpg">
                        <div>
                            <h3>Демонтаж металлолома</h3>
                            <h4>Бесплатно</h4>
                            <span>Наша бригада бесплатно произведет<br> необходимые демонтажные работы.</span>
                            <a href="#">Рассчитать стоимость</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work-with-us services">
                <div class="services-title">
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

            <div class="container mt-5">
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
        </div>
    </body>
</html>
