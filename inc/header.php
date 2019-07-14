<?php
    include("conf.php");
    session_start();
    $sql = "SELECT * FROM uc_tble_about";
    $result = mysql_query($sql);
    while($res = mysql_fetch_array($result)){
        $title = $res["title"];
        $description = $res["description"];
        $keywords = $res["keywords"];
        $address = $res["address"];
        $phone1 = $res["phone1"];
        $phone2 = $res["phone2"];
        $copyright = $res["copyrights"];
        $instagram = $res["instagram"];
        $facebook = $res["facebook"];
    }
    ?>
<?php
    $file="base.log";    //куда пишем логи
    $col_zap=9999999;        //строк в файле не более

    function getRealIpAddr() {
      if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
      { $ip=$_SERVER['HTTP_CLIENT_IP']; }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    // Если IP идёт через прокси
      { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
      else { $ip=$_SERVER['REMOTE_ADDR']; }
      return $ip;
    }

    if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';}
    elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {$bot='Googlebot';}
    else { $bot=$_SERVER['HTTP_USER_AGENT']; }

    $ip = getRealIpAddr();
    $date = date("H:i:s d.m.Y");        //дата события
    $home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    //какая страница сайта
    $lines = file($file);
    while(count($lines) > $col_zap) array_shift($lines);
    $lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
    file_put_contents($file, $lines);
?>    

<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
            <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <link href="http://bootstraptema.ru/snippets/slider/2016/bcts/bootstrap-touch-slider.css" rel="stylesheet" media="all">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="build/css/intlTelInput.css">
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            $(window).load(function() {
              $('#before-load').find('i').fadeOut().end().delay(400).fadeOut('slow');
            });
        </script>
        <script>
            AOS.init();
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
            
                $("h2").append('<em></em>');
            
                $(".thumbs a").click(function(){
            
                    var largePath = $(this).attr("href");
                    var largeAlt = $(this).attr("title");
            
                    $("#largeImg").attr({ src: largePath, alt: largeAlt });
            
                    $("h2 em").html(" (" + largeAlt + ")"); return false;
                });
            });
        </script>
    </head>
    <style media="screen">
        *{
        margin: 0;
        padding: 0;
        }
        @font-face {
            font-family: CANDARA;
            src: url("../fonts/CANDARA.TTF");
        }
        ::-webkit-scrollbar-button {
            background-image:url('');
            background-repeat:no-repeat;
            width:5px;
            height:0px
        }

        ::-webkit-scrollbar-track {
            background-color:#ecedee
        }

        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 0px;
            border-radius: 12px;
            background-color:#47e8c4;
        }

        ::-webkit-scrollbar-thumb:hover{
            background-color:#104e61;
        }

        ::-webkit-resizer{
            background-image:url('');
            background-repeat:no-repeat;
            width:4px;
            height:0px
        }

        ::-webkit-scrollbar{
            width: 6px;
        }
        #before-load {
          position: fixed;
          left: 0; 
          top: 0; 
          right: 0;
          bottom: 0; 
          background: #fff;
          z-index: 1001; 
        }
        #before-load i {
          font-size: 120px;
          position: absolute;
          left: 0;
          right: 0; 
          top: 50%; 
          margin: -50px 0 0 0;
        }
        .nav .open > a,
        .nav .open > a:hover,
        .nav .open > a:focus {background-color: transparent;}
        /* Wrappers */
        #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        }
        #wrapper.toggled {
        padding-left: 220px;
        }
        #sidebar-wrapper {
        z-index: 1000;
        left: 220px;
        width: 0;
        height: 100%;
        margin-left: -220px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #1a1a1a;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        }
        #sidebar-wrapper::-webkit-scrollbar {
        display: none;
        }
        #wrapper.toggled #sidebar-wrapper {
        width: 220px;
        }
        #page-content-wrapper {
        width: 100%;
        }
        #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -220px;
        }
        /* Sidebar nav styles */
        .sidebar-nav {
        position: absolute;
        top: 0;
        width: 220px;
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .sidebar-nav li {
        position: relative;
        line-height: 20px;
        display: inline-block;
        width: 100%;
        }
        .sidebar-nav li:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 3px;
        background-color: #1c1c1c;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;
        }
        .sidebar-nav li:nth-child(1):before{
        background-color: ;
        }
        .sidebar-nav li:nth-child(2):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(3):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(4):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(5):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(6):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(7):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(8):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(9):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(10):before {
        background-color: #314190;
        }
        .sidebar-nav li:nth-child(11):before {
        background-color: #314190;
        }
        .sidebar-nav li:hover:before,
        .sidebar-nav li.open:hover:before {
        width: 100%;
        -webkit-transition: width .2s ease-in;
        -moz-transition: width .2s ease-in;
        -ms-transition: width .2s ease-in;
        transition: width .2s ease-in;
        }
        .sidebar-nav li a {
        display: block;
        color: #ddd;
        text-decoration: none;
        padding: 10px 15px 10px 30px;
        }
        .sidebar-nav > .sidebar-brand {
        text-decoration: none;
        height: 65px;
        font-size: 60px;
        line-height: 44px;
        }
        .sidebar-nav .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #222;
        box-shadow: none;
        }
        /* Hamburger-Cross */
        .hamburger {
        position: fixed;
        top: 20px;
        z-index: 999;
        display: block;
        width: 32px;
        height: 32px;
        margin-left: 15px;
        background: transparent;
        border: none;
        }
        .hamburger:hover,
        .hamburger:focus,
        .hamburger:active {
        outline: none;
        }
        .hamburger.is-closed:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-closed:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-closed .hamb-top,
        .hamburger.is-closed .hamb-middle,
        .hamburger.is-closed .hamb-bottom,
        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-middle,
        .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
        }
        .hamburger.is-closed .hamb-top,
        .hamburger.is-closed .hamb-middle,
        .hamburger.is-closed .hamb-bottom {
        background-color: #31708f   ;
        }
        .hamburger.is-closed .hamb-top {
        top: 5px;
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
        }
        .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-closed:hover .hamb-top {
        top: 0;
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-middle,
        .hamburger.is-open .hamb-bottom {
        background-color: #1a1a1a;
        }
        .hamburger.is-open .hamb-top,
        .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
        }
        .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
        }
        .hamburger.is-open .hamb-middle { display: none; }
        .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
        }
        .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
        }
        .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
        }
        /* Overlay */
        .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(250,250,250,.8);
        z-index: 1;
        }
        #thumbnail-preview-indicators {
        position: relative;
        overflow: hidden;
        }
        #thumbnail-preview-indicators .slides .slide-1,
        #thumbnail-preview-indicators .slides .slide-2,
        #thumbnail-preview-indicators .slides .slide-3 {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        }
        #thumbnail-preview-indicators,
        #thumbnail-preview-indicators .slides,
        #thumbnail-preview-indicators .slides .slide-1,
        #thumbnail-preview-indicators .slides .slide-2,
        #thumbnail-preview-indicators .slides .slide-3 {
        height: 480px;
        }
        #thumbnail-preview-indicators .carousel-inner .carousel-caption {
        top: 20%;
        bottom: inherit;
        }
        #thumbnail-preview-indicators .carousel-indicators li,
        #thumbnail-preview-indicators .carousel-indicators li.active {
        position: relative;
        width: 100px;
        height: 8px;
        }
       @media only screen and (max-width: 600px){
            .carousel-inner h1{
                font-size: 16px;
            }        
            .carousel-inner h3{
                font-size: 14px;
            }        
        }
        #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
        position: absolute;
        top: 0;
        width: 100px;
        display: none;
        opacity: 0;
        left: 50%;
        margin-top: -80px;
        margin-left: -50px;
        }
        #thumbnail-preview-indicators .carousel-indicators li:hover > .thumbnail,
        #thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail {
        display: block;
        opacity: .8;
        }
        .carousel-inner .item img{
            height: 100vh;
            width:100%;
        }
        @media screen and (max-width : 480px) {
            .carousel-inner .item img{
                height: 50vh;
                width:100%;
            }     
        }
        #thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail:hover{
        opacity: 1;
        }
        @media screen and (max-width : 480px) {
            #thumbnail-preview-indicators .carousel-indicators li,
            #thumbnail-preview-indicators .carousel-indicators li.active {
                width: 50px;
                height: 8px;
                position: relative;
            }
            #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
                width: 50px;
                left: 50%;
                margin-top: -50px;
                margin-left: -25px;
            }
        }
        .serviceBox{
            border: 1px solid purple;
            text-align: center;
            padding: 40px 0;
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.5s ease 0s;
        }
        .serviceBox:before,
        .serviceBox:after{
            margin: 0 auto;
            border: 10px solid transparent;
            border-image: linear-gradient(to right, transparent 0%, #7a9cff 100%);
            border-image-slice: 1;
            content: "";
            width: 200%;
            height: 200%;
            background: #eba133;
            position: absolute;
            top: 160px;
            left: 0;
            z-index: -1;
            transform: rotate(-18deg);
            transition: all 0.5s ease 0s;
        }
        .serviceBox:before{
            background: #4e4e4e;
            left: -120%;
            transform: rotate(24deg);
        }
        .serviceBox:hover:before{
            transform: rotate(16deg);
        }
        .serviceBox:hover:after{
            background: #7a9cff;
            transform: rotate(-10deg);
        }
        .serviceBox .service-icon{
        font-size: 60px;
        color: #684f8e;
        line-height: 100px;
        margin-bottom: 100px;
        }
        .serviceBox .service-content{
        color: #fff;
        line-height: 25px;
        padding: 0 20px 20px;
        }
        .serviceBox .title{
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
        }
        .serviceBox .description{
        font-size: 14px;
        }
        .serviceBox .read{
        display: block;
        width: 100%;
        background: #fff;
        font-size: 15px;
        font-weight: 600;
        color: #eba133;
        padding: 10px;
        border-left: 1px solid #eba133;
        border-right: 1px solid #eba133;
        }
        .serviceBox:hover .read{
        border-color: #684f8e;
        color: #684f8e;
        }
        @media only screen and (max-width: 990px){
        .serviceBox{ margin-bottom: 30px; }
        }
        @media only screen and (max-width: 767px){
        .serviceBox:before,
        .serviceBox:after{
        top: 80px;
        }
        }
        @media only screen and (max-width: 480px){
        .serviceBox:before,
        .serviceBox:after{
        top: 140px;
        }
        }
        .now_post{
        text-align: center;
        border: 1px solid #f0f0f0;
        font-size: 14px;
        margin-bottom: 30px;
        font-family: 'raleway';
        }
        #footer {
        background: #f7f7f7;
        margin-top: 50px;
        }
        ._img{
        margin-top: 50px;
        margin-bottom: 50px;
        text-align: center;
        }
        #footer h5{
        border-bottom: 1px solid #000;
        padding-bottom: 26px;
        margin-bottom: 20px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color:#000;
        font-family:  sans-serif;
        font-weight: normal;
        }
        @media screen and (max-width : 900px) {
            #footer h5{
                border-bottom: 1px solid #000;
                margin-top: 50px;
                letter-spacing: 3px;
                text-transform: uppercase;
                text-align: center;
                color:#000;
                font-family:  sans-serif;
                font-weight: normal;
            }
            #footer li{
                text-align: center;
            }
        }
        #footer a {
        color: #000;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        line-height: 40px;
        }
        ._news{
        background: #f7f7f7;
        }
        ._copyright{
        line-height: 50px;
        text-transform: uppercase;
        color:#212121;
        font-family:  sans-serif;
        font-weight: bold;
        }
        .title {
        font-size: 32.2px;
        font-weight: 200;
        font-style: normal;
        line-height: 10rem;
        letter-spacing: 2.8px;
        }
        .grid {
        position: relative;
        padding: 1em 0 4em;
        max-width: 100%;
        list-style: none;
        text-align: center;
        }
        /* Common style */
        .grid figure {
        position: relative;
        float: left;
        overflow: hidden;
        min-width: 280px;
        max-width: 100%;
        max-height: 360px;
        width: 100%;
        background: #3085a3;
        text-align: center;
        cursor: pointer;
        }
        .grid figure img {
        position: relative;
        display: block;
        height: auto;
        width: 100%;
        opacity: 0.8;
        }
        .grid figure figcaption {
        padding: 2em;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }
        .grid figure figcaption::before,
        .grid figure figcaption::after {
        pointer-events: none;
        }
        .grid figure figcaption{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        }
        figure.effect-romeo {
        -webkit-perspective: 1000px;
        perspective: 1000px;
        }
        figure.effect-romeo img {
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(0,0,300px);
        transform: translate3d(0,0,300px);
        }
        figure.effect-romeo:hover img {
        opacity: 0.6;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
        figure.effect-romeo figcaption::before,
        figure.effect-romeo figcaption::after {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80%;
        height: 1px;
        background: #fff;
        content: '';
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-50%,-50%,0);
        transform: translate3d(-50%,-50%,0);
        }
        figure.effect-romeo:hover figcaption::before {
        opacity: 0.5;
        -webkit-transform: translate3d(-50%,-50%,0) rotate(45deg);
        transform: translate3d(-50%,-50%,0) rotate(45deg);
        }
        figure.effect-romeo:hover figcaption::after {
        opacity: 0.5;
        -webkit-transform: translate3d(-50%,-50%,0) rotate(-45deg);
        transform: translate3d(-50%,-50%,0) rotate(-45deg);
        }
        figure.effect-romeo h2{
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
        }
        figure.effect-romeo h2 {
        font-size: 22px;
        -webkit-transform: translate3d(0,-50%,0) translate3d(0,-150%,0);
        transform: translate3d(0,-50%,0) translate3d(0,-150%,0);
        }
        
        @media only screen and (max-width: 600px){
            figure.effect-romeo p{
                font-size: 10px;
            }
            figure.effect-romeo h2 {
                font-size: 14px;
                top: 45%;
            }
        }
        @media only screen and (min-width: 600px){
            figure.effect-romeo p{
                font-size: 14px;
            }
        }
        figure.effect-romeo p {
            bottom:15px; 
            background: rgba(52, 43, 89, 0.5);
            position: absolute;
            top: 40%;
            left: 0;
            width: 100%;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            padding: 0.25em 2em;
            -webkit-transform: translate3d(0,-50%,0) translate3d(0,150%,0);
            transform: translate3d(0,-50%,0) translate3d(0,150%,0);
        }
        figure.effect-romeo:hover h2 {
        -webkit-transform: translate3d(0,-50%,0) translate3d(0,-100%,0);
        transform: translate3d(0,-50%,0) translate3d(0,-100%,0);
        }
        figure.effect-romeo:hover p {
        -webkit-transform: translate3d(0,-50%,0) translate3d(0,100%,0);
        transform: translate3d(0,-50%,0) translate3d(0,100%,0);
        }
        .banner-container {
        overflow: hidden;
        position: relative;
        }
        .banner-container ul { height: 20vh; width: 100%;}
        .banner-container li {
        margin: 0 auto;
        float: left;
        overflow: hidden;
        cursor: pointer;
        position: relative;
        z-index: 9;
        }
        .banner-container li a {
        display: block;
        padding: 0px;
        max-height: 420px;
        margin: 0px;
        }
        .banner-container li span.overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        }
        figure.effect-milo {
        background: #2e5d5a;
        -webkit-box-shadow: 1px -4px 8px 2px rgba(0,0,0,0.75);
        -moz-box-shadow: 1px -4px 8px 2px rgba(0,0,0,0.75);
        box-shadow: 1px -4px 8px 2px rgba(0,0,0,0.75);
        }
        figure.effect-milo img {
        max-width: none;
        width: -webkit-calc(100% + 60px);
        width: calc(100% + 60px);
        opacity: 1;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-30px,0,0) scale(1.12);
        transform: translate3d(-30px,0,0) scale(1.12);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }
        figure.effect-milo:hover img {
        opacity: 0.5;
        -webkit-transform: translate3d(0,0,0) scale(1);
        transform: translate3d(0,0,0) scale(1);
        }
        figure.effect-milo h2 {
        position: absolute;
        right: 0;
        bottom: 0;
        padding: 1em 1.2em;
        }
        figure.effect-milo p {
        padding: 0 10px 0 0;
        width: 50%;
        border-right: 1px solid #fff;
        text-align: right;
        opacity: 0;
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
        -webkit-transform: translate3d(-40px,0,0);
        transform: translate3d(-40px,0,0);
        }
        figure.effect-milo:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
        .blog-card {
          max-height: 300px;
          display: flex;
          flex-direction: column;
          margin: 1rem auto;
          box-shadow: 0 3px 7px -1px rgba(0, 0, 0, .1);
          margin-bottom: 1.6%;
          background: #fff;
          line-height: 1.4;
          font-family: sans-serif;
          border-radius: 5px;
          overflow: hidden;
          z-index: 0;
        }
        .blog-card a {
          color: inherit;
        }
        .blog-card a:hover {
          color: #5ad67d;
        }
        .blog-card:hover .photo {
          transform: scale(1.3) rotate(3deg);
        }
        .blog-card .meta {
          position: relative;
          z-index: 0;
          height: 200px;
        }
        .blog-card .photo {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-size: cover;
          background-position: center;
          transition: transform 0.2s;
        }
        .blog-card .details, .blog-card .details ul {
          margin: auto;
          padding: 0;
          list-style: none;
        }
        .blog-card .details {
          position: absolute;
          top: 0;
          bottom: 0;
          left: -100%;
          margin: auto;
          transition: left 0.2s;
          background: rgba(0, 0, 0, .6);
          color: #fff;
          padding: 10px;
          width: 100%;
          font-size: 0.9rem;
        }
        .blog-card .details a {
          text-decoration: dotted underline;
        }
        .blog-card .details ul li {
          display: inline-block;
        }
        .blog-card .details .author:before {
          font-family: FontAwesome;
          margin-right: 10px;
          content: "\f007";
        }
        .blog-card .details .date:before {
          font-family: FontAwesome;
          margin-right: 10px;
          content: "\f133";
        }
        .blog-card .details .tags ul:before {
          font-family: FontAwesome;
          content: "\f02b";
          margin-right: 10px;
        }
        .blog-card .details .tags li {
          margin-right: 2px;
        }
        .blog-card .details .tags li:first-child {
          margin-left: -4px;
        }
        .blog-card .description {
          padding: 1rem;
          background: #fff;
          position: relative;
          z-index: 1;
        }
        .blog-card .description h1, .blog-card .description h2 {
          font-family: Poppins, sans-serif;
        }
        .blog-card .description h1 {
          line-height: 1;
          margin: 0;
          font-size: 1.7rem;
        }
        .blog-card .description h2 {
          font-size: 1rem;
          font-weight: 300;
          text-transform: uppercase;
          color: #a2a2a2;
          margin-top: 5px;
        }
        .blog-card .description .read-more {
          text-align: right;
        }
        .blog-card .description .read-more a {
          color: #5ad67d;
          display: inline-block;
          position: relative;
        }
        .blog-card .description .read-more a:after {
          content: "\f061";
          font-family: FontAwesome;
          margin-left: -10px;
          opacity: 0;
          vertical-align: middle;
          transition: margin 0.3s, opacity 0.3s;
        }
        .blog-card .description .read-more a:hover:after {
          margin-left: 5px;
          opacity: 1;
        }
        .blog-card p {
          position: relative;
          margin: 1rem 0 0;
        }
        .blog-card p:first-of-type {
          margin-top: 1.25rem;
        }
        .blog-card p:first-of-type:before {
          content: "";
          position: absolute;
          height: 5px;
          background: #5ad67d;
          width: 35px;
          top: -0.75rem;
          border-radius: 3px;
        }
        .blog-card:hover .details {
          left: 0%;
        }
        @media (min-width: 640px) {
          .blog-card {
            flex-direction: row;
            max-width: 700px;
          }
          .blog-card .meta {
            flex-basis: 40%;
            height: auto;
          }
          .blog-card .description {
            flex-basis: 60%;
          }
          .blog-card .description:before {
            transform: skewX(-3deg);
            content: "";
            background: #fff;
            width: 30px;
            position: absolute;
            left: -10px;
            top: 0;
            bottom: -1px;
            z-index: -1;
          }
          .blog-card.alt {
            flex-direction: row-reverse;
          }
          .blog-card.alt .description:before {
            left: inherit;
            right: -10px;
            transform: skew(3deg);
          }
          .blog-card.alt .details {
            padding-left: 25px;
          }
        }
        @media (max-width: 640px) {
            ._string span{
                font-size: 10px;
            }
        }


        .total{
         background: #fff;
         text-align: center;
         padding: 20px 0 40px;
         position: relative;
        }
        .total:hover{
         background:#98d7ce;
        }
        .total .service-icon{
         width: 100px;
         height: 100px;
         line-height: 95px;
         border-radius: 50%;
         padding: 15px;
         border: 3px solid #b3b3b3;
         font-size: 50px;
         color: #b3b3b3;
         margin: 0 auto;
         transition: all 0.5s ease-in-out;
        }
        .total:hover .service-icon{
         transform: rotateY(360deg);
         color: #fff;
         border-color: #fff;
         background: #4acab4;
        }
        .total .service-content h3 a{
         font-size: 22px;
         color: #333;
        }
        .total .service-content p{
         font-size: 14px;
         padding: 0 20px;
         margin: 15px 0 30px;
         color:#333;
        }
        .total:hover h3 a,
        .total:hover p{
         color:#fff;
        }
        @media screen and (max-width: 990px){
         .total{
         margin-bottom: 20px;
         padding: 20px 0;
         }
        }
        .carousel-control .fa{
            margin-top: 50vh;
        }
        @media screen and (max-width: 640px) {
            .carousel-control .fa{
                margin-top: 20vh;
            }
        }        
    </style>
    <body style="overflow-x: hidden;">
        <div id="before-load">
            <a class="text-center col-lg-12 col-md-12 col-xs-12 col-sm-12" style="top:45%; text-decoration: none; font-weight: 800;">    
             PLKIiD<i class="fa fa-superpowers fa-spin text-center"></i>
            </a>
        </div>
        <header class="col-md-12 col-lg-12 col-xs-12">
            <div id="wrapper">
                <div class="overlay"></div>
                <!-- Sidebar -->
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">
                        <li class="sidebar-brand" style="margin-bottom:20px;">
                            <a href="/">
                            <img src="images/logouc.png"  class="col-md-12 col-xs-12">
                            </a>
                        </li>
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>
                            <a href="news.php">Новости</a>
                        </li>
                        <li>
                            <a href="courses.php">Курсы</a>
                        </li>
                        <li>
                            <a href="http://pls98.kg/" target="_blank">Сайт лицея</a>
                        </li>
                        <?php
                            $sql= "select * from uc_menu";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_array($result)){
                                echo '<li><a href="page.php?menu_id='.$row["id"].'&namepage='.$row["menu_name_en"].'">'.$row["menu_name"].'</a></li>';
                            }
                            ?>
                    </ul>
                </nav>
                <!-- /#sidebar-wrapper -->
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                    </button>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
            <div class="row">
                <div id="myCarousel"  class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/slider1.jpg">
                            <div class="carousel-caption">
                                <h1>(Bjarne Stroustrup)</h1>
                                <h3>Существует только два вида языков программирования: те, которые всех раздражают, и те, которые никто не использует.</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slider2.jpg">
                            <div class="carousel-caption">
                                <h1>(Jon Ribbens)</h1>
                                <h3>PHP — это малое зло, созданное дилетантами, а Perl — великое зло, созданное лучшими извращенцами в своей сфере.</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slider3.jpg">
                            <div class="carousel-caption">
                                <h1>(Alan J. Perlis)</h1>
                                <h3>Есть два способа написать программу без ошибок; работает только третий.</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slider4.jpg">
                            <div class="carousel-caption">
                                <h1>(Michael Dell)</h1>
                                <h3>Для того, чтобы неординарно мыслить, не надо быть гением, провидцем и даже выпускником университета. Достаточно иметь почву для размышлений и умение мечтать.</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slider5.jpg">
                            <div class="carousel-caption">
                                <h1>(Steve Wozniak)</h1>
                                <h3>Образованность – это способность рисковать и давать вещам собственную оценку, а также способность подвергать утверждения сомнению, задавать правильные вопросы и добиваться истины – а не просто принимать все так, как вам это преподнесли.</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="fa fa-arrow-circle-left" style="font-size: 50px;"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="fa fa-arrow-circle-right"style="font-size: 50px;"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </header>
        <script>
            $(document).ready(function () {
             var trigger = $('.hamburger'),
             overlay = $('.overlay'),
             isClosed = false;
            
             trigger.click(function () {
             hamburger_cross();
             });
            
             function hamburger_cross() {
            
             if (isClosed == true) {
             overlay.hide();
             trigger.removeClass('is-open');
             trigger.addClass('is-closed');
             isClosed = false;
             } else {
             overlay.show();
             trigger.removeClass('is-closed');
             trigger.addClass('is-open');
             isClosed = true;
             }
             }
            
             $('[data-toggle="offcanvas"]').click(function () {
             $('#wrapper').toggleClass('toggled');
             });
            });
        </script>