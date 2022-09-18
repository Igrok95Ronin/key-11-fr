<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Serrurier'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'à proximité'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="locksmith">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="locksmith__box">
                            <div class="locksmith__left">
                                <img class="locksmith__img" src="./assets/img/sch2.png" alt="">
                            </div>
                            <div class="locksmith__right">
                                <h1 class="locksmith__title"><?= $title ?> </h1>
                                <ul>
                                    <li class="locksmith__list">Serrurier Express</li>
                                    <li class="locksmith__list">Transparence des prix</li>
                                    <li class="locksmith__list">Tranquillité d'esprit</li>
                                </ul>
                                <a class="locksmith__btn" href="<?= $phone_href  ?>"><span><?= $phone_name  ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="troubleshooting">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="troubleshooting__box">
                            <div class="troubleshooting__left">
                                <h2 class="troubleshooting__title">Serrurier <?= $city ?>
                                    dépannage 24-7 24h/24</h2>
                                <p class="troubleshooting__dscr">En tant que Serrurier <?= $city ?> nous assurons la plus
                                    grande sécurité pour votre maison ou votre local. Faites appel à notre serrurier
                                    qualifié et honnête pour une ouverture de porte, un changement de serrure ou une
                                    installation de porte blindée.</p>
                            </div>
                            <div class="troubleshooting__right">
                                <img class="troubleshooting__img" src="./assets/img/19.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="team__title">Notre équipe serrurier</h2>
                        <div class="team__box">
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/1master3.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Olivier Rousseau</p>
                                    <p class="team__age">32 ans</p>
                                    <p class="team__dol">Expert: <span>Ouverture de porte</span></p>
                                </div>
                            </div>
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/2master2.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Alex Rousseau</p>
                                    <p class="team__age">41 ans</p>
                                    <p class="team__dol">Expert: <span>Changement de serrrure</span></p>
                                </div>
                            </div>
                            <div class="team__inner">
                                <div class="team__wrapper">
                                    <img class="team__img" src="./assets/img/3master1.jpg" alt="">
                                </div>
                                <div class="team__wrapper2">
                                    <p class="team__name">Paul Bernard</p>
                                    <p class="team__age">41 ans</p>
                                    <p class="team__dol">Expert: <span>Ouverture Coffre fort</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="time">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="time__title">Intervention serrurier 20 - 30 min. <?= $city ?></h2>
                        <div class="time__box">
                            <div class="time__inner">
                                <img class="time__img" src="./assets/img/11Bildschirmfoto 2022-09-09 um 23.52.57.png" alt="">
                                <div class="time__name">Expliquez-nous votre problème</div>
                            </div>
                            <div class="time__inner">
                                <img class="time__img" src="./assets/img/22Bildschirmfoto 2022-09-09 um 23.52.29.png" alt="">
                                <div class="time__name">Obtenez un prix d'intervention fixe</div>
                            </div>
                            <div class="time__inner">
                                <img class="time__img" src="./assets/img/33Bildschirmfoto 2022-09-09 um 23.52.40.png" alt="">
                                <div class="time__name">Le meilleur serrurier chez vous en 30 Min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ambulance">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container ">
                        <div class="ambulance__box">
                            <h2 class="ambulance__title">En urgence par téléphone</h2>
                            <a class="ambulance__btn" href="<?= $phone_href  ?>"><span><?= $phone_name  ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="doorOpening">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="doorOpening__box">
                            <div class="doorOpening__inner">
                                <img class="doorOpening__img" src="./assets/img/31sch-6.jpg" alt="">
                                <ul>
                                    <li class="doorOpening__li">Ouverture de porte</li>
                                </ul>
                            </div>
                            <div class="doorOpening__inner">
                                <img class="doorOpening__img" src="./assets/img/3213.png" alt="">
                                <ul>
                                    <li class="doorOpening__li">Changement de serrrure</li>
                                </ul>
                            </div>
                            <div class="doorOpening__inner">
                                <img class="doorOpening__img" src="./assets/img/33sch-7.jpg" alt="">
                                <ul>
                                    <li class="doorOpening__li">Coffre fort</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="change">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="change__box">
                            <h2 class="change__title">Changement de serrure <?= $city ?></h2>
                            <p class="change__descr">Il est nécessaire de changer la serrure régulièrement, surtout si vous vous rendez compte que votre serrure est défectueuse. Il est également important de nous faire appel, <b>Serrurier <?= $city ?></b>, pour changer votre serrure.</p>
                            <p class="change__descr">Il est toujours mieux de confier le changement de serrure à un serrurier confirmé. Nos artisans serruriers sont des experts et vous propose des prestations de changement de serrures adaptées à vos besoins et – surtout – résistantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="services__title">Serrurier Services:</h2>
                        <div class="services__box">
                            <ul>
                                <li class="services__list">🔑 Remplacement de serrure</li>
                                <li class="services__list">🔑 Remplacement de canon</li>
                                <li class="services__list">🔑 Blindage de porte</li>
                                <li class="services__list">🔑 Porte blindée</li>
                                <li class="services__list">🔑 Perte et vol de clé</li>
                                <li class="services__list">🔑 Effraction - Cambriolage</li>
                            </ul>
                            <ul>
                                <li class="services__list">🔑 Ouverture de porte</li>
                                <li class="services__list">🔑 Changer serrure porte</li>
                                <li class="services__list">🔑 Porte blindée</li>
                                <li class="services__list">🔑 Changer barillet porte</li>
                                <li class="services__list">🔑 Boite à clé bloquée</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="partner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="partner__title">Serrurier partenaire</h2>
                        <div class="partner__box">
                            <img class="partner__img" src="./assets/img/41logo-FICHET-Serrure--1.jpg" alt="" >
                            <img class="partner__img" src="./assets/img/421531831055756.png" alt="" >
                            <img class="partner__img" src="./assets/img/43logo-VACHETTE-Serrure-.jpg" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">Copyright © 2022</div>
            </div>
        </div>
        <a class="flex__btn" href="<?= $phone_href  ?>"><span><?= $phone_name  ?></span></a>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
</body>

</html>