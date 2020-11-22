<?php

include_once './libphp/config/db-config.php';

class DBConnect
{
    var $p_db_res = 0;
    var $p_db_error_message = '';

    var $DebugUsageWriteLog = true;

    static $count_query = 0;

    var $data = array();

    public function __construct($query = '') {

        global $p_db_link;

        $this->p_db_link = $p_db_link;

        if (!$this->p_db_link) {
            $this->p_db_link = mysqli_connect(MysqlHost, MysqlUser, MysqlPWD) or die(mysqli_error($this->p_db_link));

            mysqli_select_db($this->p_db_link, MysqlDB) or die(mysqli_error($this->p_db_link));

//            if ($this->DebugUsageWriteLog)
//                $this->DebugWriteLog('Connect to db');

            mysqli_query( $this->p_db_link, 'SET NAMES utf8mb4') or die(mysqli_error($this->p_db_link));

        }
        if (strlen(trim($query)))
            $this->Query($query);

        $p_db_link = $this->p_db_link;

    }


    function GetError()
    {
        return mysqli_error();
    }

    function Query($query, $min = '', $max = '')
    {
        if (strlen($min))
            $query .= " LIMIT $min";
        if (strlen($max))
            $query .= ",$max ";

        $this->p_db_res = mysqli_query($this->p_db_link, $query) or die(mysqli_error($this->p_db_link));

        $this->data = array();
        while ($obj = mysqli_fetch_object($this->p_db_res)) {
            $this->data[] = $obj;
        }
        mysqli_free_result($this->p_db_res);


        return 1;

    }
    function Update($query, $min = '', $max = '')
    {
        if (strlen($min))
            $query .= " LIMIT $min";
        if (strlen($max))
            $query .= ",$max ";

        $this->p_db_res = mysqli_query($this->p_db_link, $query) or die(mysqli_error($this->p_db_link));

        return $this->p_db_res;

    }

    function DebugWriteLog($str)
    {

        $pagename = isset($_GET['name']) ? $_GET['name'] : (isset($_POST['name']) ? $_POST['name'] : 'index');
        $filename = date('d_m_Y') . '_db.log';
        $path = __DIR__ . '/../logs/db/';
        $str = date('Y.m.d h:i:s') . ';ip: ' . $_SERVER["REMOTE_ADDR"] . ';' . $pagename . ';' . $str . "\n";

        return file_put_contents($path . $filename, $str, FILE_APPEND);
    }
    function GetLastInsert()
    {
        return mysql_insert_id();
    }

}