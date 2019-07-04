<?php
    include("conf.php");
    session_start();
    header('Content-Type: text/html; charset=utf-8');
        session_start();
    
    
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Админ панель - ПЛКиИТ №98
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/other.css">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <link href="http://bootstraptema.ru/snippets/slider/2016/bcts/bootstrap-touch-slider.css" rel="stylesheet" media="all">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="js/main.js"></script>
                                <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                        <script type="text/javascript">
                        $(document).ready(function(){
                            var maxCount = 200;
                            $("#counter").html(maxCount);
                            $(".texttext").keyup(function(){
                            var revText = this.value.length;

                                if (this.value.length > maxCount)
                                    {
                                    this.value = this.value.substr(0, maxCount);
                                    }
                                var cnt = (maxCount - revText);
                                if(cnt <= 0){$("#counter").html('0');}
                                else {$("#counter").html(cnt);}

                            });
                        });
                        </script>


    </head>
    <body>
        <?php
            if(isset($_SESSION['id'])){
            
            ?>
        <header id="header" class="col-md-12 col-xs-12">
            <div class="container">
                <div class="row">
                    <img src="images/logo.png" class="text-center ">
                    <nav role="navigation">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu">
                                <a href="main.php">
                                    <li>Главная</li>
                                </a>
                                <a href="pageslist.php">
                                    <li>Список страниц</li>
                                </a>
                                <a href="postlist.php">
                                    <li>Список записей</li>
                                </a>
                                <a href="courseslist.php">
                                    <li>Список курсов</li>
                                </a>
                                <a href="option.php">
                                    <li>Настройка</li>
                                </a>
                                <a href="/">
                                    <li>На сайт</li>
                                </a>
                                <a href="logout.php">
                                    <li>Выход</li>
                                </a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <?php
            }
            ?>