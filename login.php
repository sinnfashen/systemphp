<?php
/**
 * Created by PhpStorm.
 * User: 54926
 * Date: 2017/2/23
 * Time: 19:24
 */
session_start();
require 'log.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(iSset($_POST['password'])) {
        $out = work($_POST['password']);
        if ($out != "WRONG PASSWORD") {
            $_SESSION["login"] = $_POST['password'];
            header("Location: http://123.207.93.47/system/ajax/index.php");
        } else {
            echo "<script> document.getElementById('status').innerHTML='密码错误'</script>";
        }
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="author" value="Austin Jiang">
    <title>CPP Log-in</title>
    <style type="text/css">
        ::selection{
            background-color: #0cc357;
        }

        body{
            width: 100vw;
            height: 100vh;
            margin: 0;
            font-family: Arial;
            background-color: #100d27;
        }
        main{
            width: 60vw;
            margin: 0 auto;

        }

        #blank{
            height: 18vh;
        }

        form{
            border-radius: 1em;
            padding-top: 1em;
            padding-bottom: 4em;
            width: 30vw;
            min-width: 19em;
            max-width: 24em;
            margin: 0 auto;
            background-color: #6f5ef3;
        }
        input, span{
            color: #fff;
            width: 15vw;
            min-width: 14em;
            height: 3em;
            display: block;
            margin: 0 auto;
            border-style: solid;
            border-width: 0;
            border-radius: 1.5em;
            background-color: #019d41;
            transition: 200ms ease all;
        }
        #submit{
            background-color: #009ffd;
            margin-top: 1.5em;
            cursor: pointer;
            font-weight: bold;
            font-family: "黑体";
        }
        #submit:hover{
            border-width: 3px;
            border-color: #009ffd;
            background: #fff;
            color:#009ffd;
        }

        #password,#username{
            margin-top: 1.5em;
            padding-left: 1em;
            padding-right: 1em;
            border-width: 3px;
            border-color: #009ffd;
            background-color: #ccc;
            color: #019d41;
            transition: 400ms ease all;
        }
        #password:focus, #username:focus{
            background-color: #fff;
            border-width: 3px;
            border-color: #009ffd;
            width:17vw;
            box-shadow: 1px 1px 4px #fff;
        }
        #username{
            margin-top: 2.5em;
        }


        span{
            height: 2.5em;
            line-height: 2.5em;
            text-align: center;
            background-color: #009ffd;
            font-family: "黑体";
            transition: 400ms ease all;
        }
        span:hover{
            color: #009ffd;
            background-color: #fff;
        }

        #status{
            padding-top: .5em;
            padding-bottom: .5em;
            padding-left: 1em;
            padding-right: 1em;
            word-wrap:break-word;
            word-break:keep-all;
            color: #fff;
            margin-top: 3vh;
            background-color: #009ffd;
            height: auto;
            line-height: 1.5em;
            text-align: center;
            font-family: "黑体";
            transition: 400ms ease all;
            opacity: 0.7;
            text-align: left;
        }

        form > h1{
            color: #fff;
            text-align: center;
            border-bottom: 3px;
            border-color: #3b337d;

        }

        footer{
            color: #999;
            position: fixed;
            bottom: 1em;
            width: 100%;
            text-align: center;
        }



    </style>
</head>
<body>

<div id="blank"></div>
<form action="index.php" method="post">
    <h1>CPP system</h1><hr>
    <input type="text" name="user" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="Start" id="submit">
    <span id="status">请输入密码 Please enter your password</span>
</form>

<footer>
    &copy;2017 China's Price Project
</footer>
</body>
</html>

