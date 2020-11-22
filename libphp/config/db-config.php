<?php

if (file_exists('./libphp/config/conf'))
    $config = trim(file_get_contents ('./libphp/config/conf'));
else
    $config = "demo";

switch ($config){
    case "Production":
        define("MysqlHost","fdb30.awardspace.net");
        define("MysqlDB","3627497_volodymyr01korol");
        define("MysqlUser","3627497_volodymyr01korol");
        define("MysqlPWD","1234djdf");
        break;
    case "Vova":
        define("MysqlHost","localhost");
        define("MysqlDB","designflex");
        define("MysqlUser","root");
        define("MysqlPWD","root");
        break;
    case "demo":
        break;
    default:
        echo "<p style='color: maroon;font-style: italic;'>Incorrect username at file <u>'libphp/config/conf'</u></p>";
        die();
}

