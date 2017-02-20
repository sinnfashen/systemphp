<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 54926
 * Date: 2017/2/20
 * Time: 19:49
 */
if(isset($_SESSION['views']))
    $_SESSION['views']=$_SESSION['views']+1;
else
    $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<?php
if(isset($_POST["order"]))
    if($_POST["order"] == "reset") {
        unset($_SESSION["login"]);
        unset($_SESSION["views"]);
    }

echo "<h2>CPP System</h2>\n";
echo "当前时间是 " . date("h:i:sa") . "</br>". "</br>";

function shuaxing(){
    ob_flush();
    flush();
}
function work(){
    error_reporting(E_ALL);
    set_time_limit(10);
    $in = $_POST["order"];
    $port = 9813;
    $ip = "127.0.0.1";
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    echo "试图连接 '$ip' 端口 '$port'...\n";
    shuaxing();
    $result = socket_connect($socket, $ip, $port);
    if ($result < 0) {
        echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error()) . "\n";
    } else {
        echo "连接OK</br>";
    }
    shuaxing();
    if(!isset($_SESSION["login"]))
    {
        if (!socket_write($socket, $in, strlen($in))) {
            echo "socket_write() failed: reason: " . socket_strerror($socket) . "\n";
        }
        socket_recv($socket, $out,1024, 0);
        echo nl2br($out),'</br>';
        shuaxing();
        if($out == "COMFIRM")
            $_SESSION["login"] = $in;
    }else
    {
        if (!socket_write($socket, $_SESSION["login"], strlen($_SESSION["login"]))) {
            echo "socket_write() failed: reason: " . socket_strerror($socket) . "\n";
        }
        socket_recv($socket, $out,1024, 0);
        if (!socket_write($socket, $in, strlen($in))) {
            echo "socket_write() failed: reason: " . socket_strerror($socket) . "\n";
        }
        socket_recv($socket, $out,1024, 0);
        echo '</br>',nl2br(str_replace(" ","&nbsp;","Hello world!")),'</br>'. "</br>";
        shuaxing();
    }
}
if(isset($_POST["order"]) and $_POST["order"] != "reset")
    work();
?>

<html>
<body>

<form action="index.php" method="post">
    <?php
    if(!isset($_SESSION["login"]))
        echo "请输入密码： ";
    else
        echo "已登录：请输入命令：";
    ?><input type="text" name="order"><br>
    <input type="submit">
</form>

</body>
</html>

