<!DOCTYPE html>
<html>
<head>
    <meta name="yandex-verification" content="a879b8c09b0cd18a"/>
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300"/>
    <link rel="stylesheet" href="count/assets/css/styles.css"/>
    <link rel="stylesheet" href="count/assets/countdown/jquery.countdown.css"/>
    <link rel="stylesheet" media="screen" href="count/css/style.css"/>

    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="count/js/countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta keywords=""
    <meta charset="UTF-8"/>
    <title>K.Bukova Маникюр Липецк</title>
</head>
<body>

<div class="wrapper">
    <div class="menu">
        <a href="#" class="menu-btn" id="menu-btn">
            <span></span>
        </a>
        <nav class="menu-list">
            <a href="#gallery">Посмотреть мои работы</a>
            <a href="#order">Сделать заказ</a>
            <a href="#map">Мы на карте</a>

        </nav>
    </div>
    <div class="content">
        <section class="header" id="myVer_header">
            <a href="index.html"><img class="t" src="image/logo2.png"> </a>
        </section>

        <section class="media-content" id="myVer_media-content">

            <div class="call-to-action">
                <div class="sail-attention">
                    <h1>Маникюр в Липецке по акции!</h1>
                </div>
                <div class="sevice-words">
                    <p>Наш салон маникюра позаботится о здоровье и красоте ваших рук. Наш мастер применяtт только
                        опробованные и разрешенные средства и материалы, которые позволят добиться длительного
                        результата.</p>
                </div>
                <div class="service-list">
                    <ul>
                        <li>Маникюр</li>
                        <li>Покрытие ногтей гель-лаком</li>
                        <li>Оздоровление и укрепление ногтей современными натуральными косметическими средствами</li>
                        <li>Дизайн</li>
                    </ul>
                    <a href="#order">
                        <button class="button-submit-mk">Сделать заказ</button>
                    </a>

                </div>
            </div>

        </section>

        <section class="sale-words" id="myVer_sale-words">
            <p>Так же Вы можете договориться о записи, позвонив по телефону +7(904)690-62-13</p>
        </section>

        <section class="sale" id="myVer">
            <div class="inborder-top">
                <div class="container">
                    <h1 class="over-sail">До конца акции осталось:</h1>

                    <div id="countdown"></div>
                </div>

            </div>
        </section>


        <section class="advantages_total" id="myVer2">
            <a name="gallery"></a>
            <div class="inborder-center">
                <div class="advntages_container">
                    <div class="advantages">
                        <div class="advantages_item">
                            <img src="image/1.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/2.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/3.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/4.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/5.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/6.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/7.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/8.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/9.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/10.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/11.png">
                        </div>
                        <div class="advantages_item">
                            <img src="image/12.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="order-form" id="myVer3">
            <a name="order"></a>
            <div class="inborder-bottom">

                <div class="order-words">Заполните форму чтобы заказать звонок</div>
                <?php if (!isset($_POST['fio']) and !isset($_POST['email']) and !isset($_POST['phone'])) { ?>
                    <form class="form" action="" method="POST">
                        <p><input type="text" name="name" class="feedback-input" placeholder="Укажите Ваше имя" id=""
                                  required></p>
                        <p><input type="text" name="email" class="feedback-input" placeholder="E-mail" id="" required>
                        </p>
                        <p><input type="text" name="phone" class="feedback-input"
                                  placeholder="Номер мобильного телефона" id="" required></p>
                        <p><textarea name="text" placeholder="Massage" id="" class="feedback-input"> </textarea></p>
                        <input type="submit" name="" value="Сделать заказ" class="button-submit">
                        <div class="easy"></div>
                    </form>
                    <?php
                } else {
                    $fio = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $text = $_POST['text'];
                    $fio = htmlspecialchars($fio);
                    $email = htmlspecialchars($email);
                    $phone = htmlspecialchars($phone);
                    $text = htmlspecialchars($text);
                    $fio = urldecode($fio);
                    $email = urldecode($email);
                    $phone = urldecode($phone);
                    $text = urldecode($text);
                    $fio = trim($fio);
                    $email = trim($email);
                    $phone = trim($phone);
                    $text = trim($text);
                    if (mail("katia@kbukova.ffox.site", "Заявка с сайта", "ФИО:" . $fio . "; E-mail: " . $email . "; Phone: " . $phone . "; Текст: " . $text, "Content-type: text/html; charset='utf-8' \r\n")) {
                        echo "<p class='mail-stat'> Заявка отправлена! Мы обязательно с вами свяжемся.</p>";
                    } else {
                        echo "При отправке сообщения возникли ошибки";
                    }
                }
                ?>


                <div class="info">
                    <p>Маникюр – это модный тренд в сфере ухода за ноготочками. В нашей студии маникюра в Москве Вам
                        предложат сделать только эксклюзивный нейл, добавив элементы последних достижений стилистов в
                        области ногтевого сервиса. Мы применяем только новейшие технологии, что позволяет мастерам нашей
                        студии создавать настоящие шедевры. Вы не только приведете в порядок свои ручки, но и
                        насладитесь самой процедурой.
                    </p>
                    <div class="vk">
                        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?158"></script>

                        <!-- VK Widget -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                            VK.Widgets.Group("vk_groups", {mode: 3}, 90344372);
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="location" id="myVer4">
            <a name="map"></a>
            <div class="map-word">
                <h3>Вы можете найти нас по адресу г. Липцек ул. Торговая д.4</h3>
            </div>
            <div id='map'></div>
            <script>
                function initMap() {
                    var uluru = {lat: 52.599738, lng: 39.586525};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17.5,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyBaSUa8uQCOywp3LmV9JqT4g2hE5c2d-5s
&callback=initMap">
            </script>


        </section>

        <section class="footer">
            <table>
                <tr>
                    <td><p>Контакный номер: +7(904)690-62-13</p>
                        <p>Адрес: г. Липецк ул. Торговая д.4</p>
                        <p>E-mail: katia@kbukova.ffox.site</p>

                    <td><p>Так же вы можете найти наши странички Вконтакте и Instgramm:</p>
                        <a href="https://vk.com/bukova_studio?from=quick_search"><p>Страничка Вконтакте</p></a>
                        <a href="https://vk.com/bukova_studio?from=quick_search"><p>Страничка в Instagram</p></a>

                    </td>
                    <td><p><a href="https://panel.fastfox.pro/aff.php?aff=246"> <img src="image/fastfox.png"></a></p>
                    </td>
                </tr>

            </table>
        </section>


    </div>
</div>
<script type="text/javascript" src="script.js"></script>


</body>
</html>