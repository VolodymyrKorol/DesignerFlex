<?php

include_once './libphp/DBConnect.php';


class NeadsContainer
{
    function __constructor($fields_and_values)
    {
        foreach ($fields_and_values as $name => $value) {
            $this->$name = $value;
        }
    }
}


class Base
{
    var $DebugLastQuery = '';
    var $Items = array();
    public $db_con;

    function __construct()
    {
         $this->db_con = new DBConnect();
    }

    function Query($SQL = '', $min = '', $max = '')
    {

        $this->DebugLastQuery = $SQL;
        $res = 0;
        if (strlen($SQL)) {
            $res = $this->db_con->Query($SQL, $min, $max);

            $this->Items =& $this->db_con->data;

        }
        return $res;
    }

    function Retrieve($SQL = '', $min = '', $max = '')
    {
        return $this->Query($SQL, $min, $max);
    }

    function Update($SQL = '')
    {
        return $this->db_con->Update($SQL);
    }

    function Append($SQL = '')
    {
        $res      = $this->Query($SQL);
        $res2     = $this->db_con->Query("SELECT LAST_INSERT_ID() as id", '', '');
        $this->id = $this->db_con->data[0]->id;
        return $this->id;
    }

    function Delete($SQL = '')
    {
        return $this->Query($SQL);
    }


    function Length()
    {
        return count($this->Items);
    }
    function ErrorMessage()
    {
        return $this->db_con->GetError();
    }

}


