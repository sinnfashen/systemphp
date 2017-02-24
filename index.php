<?php
session_start();
if(empty($_SESSION["login"]))
    header("Location: http://123.207.93.47/system/ajax/login.php");
$info = work($_SESSION['login'])
?>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">

    <title>CPP system</title>
    <style>

        ::selection{
            background-color: #999;
        }

        body{
            margin:0;
            background-color: #071226;
            font-family: Arial;
            color: #fff;
            /*opacity: 0.8;*/
            text-align: center;

        }
        @media screen and (max-width: 767px){
            body{
            }
        }

        .nav{
            width: 100%;
            height: 3rem;
            position: fixed;
            top: 0;
            background-color: #000;
            opacity:0.6;
        }

        .nav-wrapper{
            width: 93%;
            height:100%;
            margin:0 auto;
            max-width:1440px;
            line-height: 3rem;
            font-size: 1.7rem;
        }

        @media screen and (max-width: 767px){
            .nav{
            }
        }

        .banner{
            width:92%;
            height: 0rem;
            /*background-color: #019d41;*/
            -webkit-border-radius: 0.3rem;
            -moz-border-radius: 0.3rem;
            border-radius:0.3rem;
            margin: 3rem auto 0 auto;
        }

        @media screen and (max-width: 767px){
            .banner{
            }
        }

        .banner > h1{
            width: 100%;
            height:100%;
            line-height:4rem;
            font-size: 2rem;
        }

        .main{
            width: 95%;
            height: auto;
            margin: 0 auto;
        }

        .main, .banner,.footer-wrapper,.nav-wrapper{
            max-width: 1440px;
        }

        .row{
            width: 100%;
            height: auto;
            padding: 0.5rem 0 0.5rem 0;
            margin: 0.5rem auto;
            /*background-color: #4cb0f9;*/
            -webkit-border-radius: 0.3rem;
            -moz-border-radius:0.3rem;
            border-radius: 0.3rem;
            overflow: auto;

        }

        @media screen and (max-width: 767px) {
            .row{
            }

        }

        .block{
            float: left;
            width: 29%;
            height:auto;
            margin:1rem 0.4% 0 0.4%;
            border-left: solid #009ffd 2px;
            border-right: solid #009ffd 2px;
            padding: 1rem;
            overflow: auto;
        }

        @media screen and (max-width: 767px){
            .block{
                float: none;
                width: 87%;
                height: auto;
                min-width:0;
                margin: 1.5rem auto 0.5rem auto;
            }

        }

        .block-2{
            float: left;
            width: 63.3%;
            height: auto;
            margin:1rem 0.4% 0 0.4%;
            border-left: solid #009ffd 2px;
            border-right: solid #009ffd 2px;
            padding:1rem;

        }

        .server-block{
            height:auto !important;
            overflow: auto !important;
        }

        @media screen and (max-width: 767px){
            .block-2{
                float: none;
                width: 87%;
                height: auto;
                min-width:0;
                margin: 1.5rem auto 0.5rem auto;
            }
        }

        .title{

            width: auto;
            height: 3rem;
            padding: 1rem;
            /*background-color: #4cb0f9;*/
            line-height: 3rem;
            font-size: 2rem;
            text-align: left;
        }

        .sub-row{

            width: auto;
            height: 2rem;
            padding: 1rem;
            /*background-color: #4cb0f9;*/
            line-height: 2rem;
            font-size: 2rem;
            text-align: left;
            border-bottom: solid #3ebe3e;
        }

        #sub-title-2{
            height: 1.6rem;
            line-height: 1.6rem;
        }



        .number{
            width: 40.5%;
            height:12rem;
            padding: 4%;
            margin-top: 1rem;
            /*background-color: #4cb0f9;*/
            float: left;
            line-height: 12rem;
            font-size: 4rem;
            border-right: solid #3ebe3e;
            border-left:solid #3ebe3e;
        }



        @media screen and (max-width: 767px){
            .number{
                width: 36%;
            }
        }

        .sub-title{
            width:100%;
            height: 2rem;
            line-height: 2rem;
            font-size: 1.5rem;
            border-bottom: solid #3ebe3e;
        }

        .sub-number{
            width:100%;
            height: 10rem;
            line-height: 10rem;
            font-size: 3.5rem;

        }

        .inner-value{
            height: 3rem;
            text-align: right;
        }
        .inner-property{
            height: 3rem;
            margin-left: 5%;
            text-align: left;
        }

        #row-title{
            height:3rem;
            line-height: 3rem;
            font-size: 2rem;
            margin-bottom: 0;
            color: #009ffd;
        }

        .server-title, .server-info{
            width: 100%;
            height: 2.2rem;
            /*background-color: #3ebe3e;*/
            border-bottom: solid #3ebe3e;
            line-height: 2.2rem;
            font-size: 1.2rem;
        }

        .server-title{
            text-align: center;
        }

        .server-property{
            height: 100%;
            text-align: center;
            margin-left: 1rem;
            float: left;
        }

        .server-value{
            height:100%;
            text-align: right;
        }

        .footer{
            width:100%;
            margin-bottom: 1rem;
            height:0;
        }

        .footer-info{
            /*background-color: #019d41;*/
        }

        .footer-wrapper{
            height: 100%;
            width: 95%;
            margin: 0 auto;
            /*background-color: aquamarine;*/
        }

        .copyright{
            margin-top: 1rem;
        }

    </style>
</head>


<body>
<nav class="nav"><div class="nav-wrapper">CPP system</div></nav>
<div class="banner"><h1></h1></div>
<div class="main">

    <div class="row" id="row-title">Basic information</div>
    <div class="row" >
        <div class="block">
            <div class="title" id="title-1">CPP SYSTEM</div>

            <div class="number" id="number-1"><div class="sub-title">server</div><div class="sub-number"><?php echo $info['sl'] ?></div></div>
            <div class="number" id="number-2"><div class="sub-title">console</div><div class="sub-number"><?php echo $info['cl'] ?></div></div>

        </div>
        <div class="block">
            <div class="sub-row" id="sub-title-2">MISSION</div>
            <div class="sub-row"><span class="inner-property">TMALL</span><span class="inner-value"><?php echo $info['ms']['TMALL']['s'] ?></span></div>
            <div class="sub-row"><span class="inner-property">JD</span><span class="inner-value"><?php echo $info['ms']['JD']['s'] ?></span></div>
            <div class="sub-row"><span class="inner-property">REFRESHER</span><span class="inner-value"><?php echo $info['ms']['JD']['s']?></span></div>
            <div class="sub-row"><span class="inner-property"></span><span class="inner-value"></span></div>
        </div>
        <div class="block">
            <div class="sub-row" id="sub-title-2">STATISTICS</div>
            <div class="sub-row"><span class="inner-property">TMALL</span><span class="inner-value"><?php echo $info['st']['TMALL'] ?></span></div>
            <div class="sub-row"><span class="inner-property">JD</span><span class="inner-value"><?php echo $info['st']['JD'] ?></span></div>
            <div class="sub-row"><span class="inner-property"></span><span class="inner-value"></span></div>
            <div class="sub-row"><span class="inner-property"></span><span class="inner-value"></span></div>
        </div>



    </div>




    <div class="row" id="row-title">Server information</div>
    <div class="row">
        <div class="block server-block"><div class="server-title">TMALL</div>
            <?php
            foreach($info['wk'] as $x=>$x_value) {
                echo "<div class='server-info'><span class='server-property'>", $x, "</span><span class='server-value'>",$x_value['TMALL']['s'],"</span></div>";
                echo "<br>";
            }
            ?>
        </div>
        <div class="block server-block"><div class="server-title">JD</div>
            <?php
            foreach($info['wk'] as $x=>$x_value) {
                echo "<div class='server-info'><span class='server-property'>", $x, "</span><span class='server-value'>",$x_value['JD']['s'],"</span></div>";
                echo "<br>";
            }
            ?>
        </div>
    </div>
    <div class="row" id="row-title">Other information</div>
    <div class="row">
        <div class="block"></div>
        <div class="block-2"></div>



    </div>
</div>

<footer class="footer">
    <div class="footer-info">
        <div class="footer-wrapper"></div>
    </div>
    <div class="copyright">&copy;2017 China's Price Project</div>
</footer>

</body>
</html>