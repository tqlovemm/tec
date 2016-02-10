<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEC引擎俱乐部-中国最神秘低调的豪车主题俱乐部</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="TEC引擎豪车俱乐部,TEC,豪车俱乐部,超跑俱乐部,玛莎拉蒂车友会,法拉利车友会">
    <meta name="Description" content="TEC引擎俱乐部是目前中国最神秘低调的豪车主题俱乐部，运营玛莎拉蒂、法拉利等品牌豪车车友会，并举办各种品质活动以及提供顶级生活方式服务。">
   
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
/*index*/
        .contact-phone{width: 100%;height: 50px;background-color: rgba(97, 95, 95, 0.5);;overflow: hidden;;text-align: center;line-height: 50px;margin-top: 10px;margin-bottom: 0;margin-left: 0px;}
        .contact-phone li{width: 49%;height: 100%;padding: 0;}
        .contact-phone li:hover{background-color: #F4A819;}
        .contact-phone li a{padding:15px 40px;text-decoration: none;color:white;}
        .contact-phone li a:hover{color: white;}


            .fa{font-size: 24px !important;}
            body{background-color: #000000;}
            .btn-myself{background-color: #080606;box-shadow: 0 0 10px #000;padding:5px 10px 10px 10px;}
            .btn-myself:hover{background-color: #1d1d1d;}
            .start-img{position: absolute;width: 100%;height: 100%;left: 0;top:0;z-index: 9;background: url('img/启动画面.png') center black;}
        @media (max-width: 768px) {
            .start-img{background: url('img/320x480.png') center black no-repeat;}
            .flexslider{ padding:0 10px; }
            .about-page .templatemo-welcome {  margin-top: 10px;  padding-bottom: 0;  }
            .welcome-title-1,
            .about-page .welcome-title-2{font-size: 18px;text-align: center;}
            .flexslider .welcome-message{ line-height:1.5em;font-weight: 100;font-size: 13px;}
            .templatemo-top-section{padding-bottom: 0;}
            footer.tm-footer{padding-top: 0;}
            .about-slider img{width: 250px;}
            .flex-direction-nav a{top:25%;font-size: 30px;}
        }

/*charter*/
        .services-page .templatemo-welcome {padding-bottom: 70px;}
        .charter{background: url("./img/services/章程.jpg") center repeat;padding:40px 100px;}

        .services-container-1 .list-content{background: rgba(255, 255, 255, 0.69);padding:10px 30px;}
        .services-container-1 h3{color: #b53636;font-weight: 700;}
        .services-container-1 h5{color: #b53636;font-weight: 700;}
        @media (max-width:768px) {
            .charter{padding:0;}
            .templatemo-welcome{padding:0;margin:0;!important;}
            .services-page .templatemo-welcome{padding:0;!important;}
            .templatemo-top-section{padding-bottom: 20px !important;}
            .services-container-1 .list-content {
                background: rgba(255, 255, 255, 0.69);
                padding: 10px;
            }
        }

        /*contact*/
        .contact-list{color: white;font-weight: 500;}
        .contact-list span{color: #b53636;}
        .contact{ background:url("img/contact/联系我们.png") center no-repeat;background-size: 100% 280%;min-height: 400px;margin-bottom: 0;}

        @media (max-width: 768px) {
            .contact{background-size: 100% 200%;min-height:200px;}

        }

/*join*/


.join{ background:url("img/contact/2.jpg") center;padding:0; }
.join-content{color:white;}
.join-content ul{padding:10px;}
.join-content li:after{ content:"&nbsp;";  height:0;  clear:both;  visibility:hidden;  display:block;margin: 20px 0;}

.join-content li span{width: 96%;font-weight: 100;}
.join-content li i{width: 4%;}
.join-content li i,.join-content li span{float: left;}
@media (max-width:768px) {
    /*top start*/
    .templatemo-welcome{padding:0;margin:0;!important;}
    .services-page .templatemo-welcome{padding:0;!important;}
    .templatemo-top-section{padding-bottom: 20px !important;}

    .join-content{font-weight: 100;}
    .join-content h1{font-size: 20px;}
    .join-content li{font-size: 13px;}
    .join-content li span{width: 94%;}
    .join-content li i{width: 6%;}
}
        /*services*/

.services-blocks-container{margin-bottom: 0;}
.services{background: url("./img/services/服务.jpg") center repeat;padding:40px 100px;}

.services-block{background: none;padding:0px 30px;}
.services-block img{margin-bottom: 20px;}

.services-content i{color:#b53636;margin-right: 10px;font-weight: bold;}
.services-title-2{font-size: 14px;font-weight: normal;}
.services-content{ background: rgba(255, 255, 255, 0.69);padding:30px 0;  }
@media (max-width:768px) {

    .services-content, .services-block, .services-container-1{padding:5px;}
    .services-title-2{font-size: 14px;font-weight: 200;}
}
    </style>

</head>
<body class="about-page">
<?php
$a = date("w",strtotime("日期"));
if($a =="0" || $a=="6"){
    $tel =  "18021245073";
}else{
    $tel =  "0512-62747413";
}
?>
<section class="templatemo-top-section">
    <div class="templatemo-header">
        <img class="templatemo-header-img" src="img/header.png" alt="Header">
        <img class="templatemo-site-name center-block" src="img/标志.png" alt="Logo">
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <div class="templatemo-nav-container">
            <nav class="templatemo-nav">
                <ul>
                    <li><a <?php if($_SERVER['PHP_SELF']=='/index.php'){echo ' class="active" ';}?> href="index.php" title="首页">Home</a></li>
                    <li><a <?php if($_SERVER['PHP_SELF']=='/services.php'){echo ' class="active" ';}?> href="services.php" title="服务">SERVICE</a></li>
                    <li><a <?php if($_SERVER['PHP_SELF']=='/charter.php'){echo ' class="active" ';}?> href="charter.php" title="章程">CHARTER</a></li>
                    <li><a <?php if($_SERVER['PHP_SELF']=='/join.php'){echo ' class="active" ';}?> href="join.php" title="加入我们">JOINUS</a></li>
                    <li><a <?php if($_SERVER['PHP_SELF']=='/contact.php'){echo ' class="active" ';}?> href="contact.php" title="联系我们">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <ul class="list-inline contact-phone visible-sm visible-xs">
        <li class="pull-left"><a href="tel://<?=$tel?>"><i class="glyphicon glyphicon-earphone"></i>   Phone</a></li>
        <li class="pull-right"><a style="padding:15px 60px;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1607962445&site=qq&menu=yes">QQ</a></li>
    </ul>
