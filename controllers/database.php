<?php
class DataBase
{
    private $db;
    
    public function connect($server, $database_name, $username, $password)
    {
        $this->db = mysql_connect($server, $username, $password);
        mysql_query("Set charset utf8", $this->db);
        mysql_query("Set character_set_client = utf8", $this->db);
        mysql_query("Set character_set_connection = utf8", $this->db);
        mysql_query("Set character_set_results = utf8", $this->db);
        mysql_query("Set collation_connection = utf8_general_ci", $this->db);
        
        if (!$this->db) {
            return false;
        }
        
        if (!mysql_select_db($database_name)) {
            return false;
        }
        
        return true;
    }
    
    public function disconnect()
    {
        mysql_close($this->db);
    }
    
    public function restoarray($res)
    {
        if (!$res)
            return $res;
        $rows = mysql_num_rows($res);
        $arr  = array();
        for ($i = 0; $i < $rows; $i++) {
            $f     = mysql_fetch_array($res);
            $arr[] = $f;
        }
        return $arr;
    }
    
    public function mysqlerror()
    {
        return "ERROR " . mysql_errno() . " " . mysql_error();
    }
    
    public function mysqlerrorNumber()
    {
        return mysql_errno();
    }
    
    public function execute($task)
    {
        return mysql_query($task);
    }
    
    public function growcount($task)
    {
        return mysql_num_rows($this->execute($task));
    }
    
    public function scalar($select)
    {
        $res = $this->execute($select);
        if (!$res)
            return $res;
        if (mysql_num_rows($res) < 1)
            return false;
        return mysql_result($res, 0, 0);
    }
    
    public function rowcount($res)
    {
        if (!$res)
            return $res;
        return mysql_num_rows($res);
    }
    
    public function LastRowId()
    {
        return mysql_insert_id();
    }
}

?>