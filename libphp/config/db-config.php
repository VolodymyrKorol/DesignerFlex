<?php

if (file_exists('./libphp/config/conf'))
    $config = trim(file_get_contents ('./libphp/config/conf'));
else
    $config = "demo";

switch ($config){
    case "Production":
        define("MysqlHost","sql112.unaux.com");
        define("MysqlDB","unaux_26959405_designflex");
        define("MysqlUser","unaux_26959405");
        define("MysqlPWD","sta2pvxn9in7jpd");
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

