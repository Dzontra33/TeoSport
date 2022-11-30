<?php

//Use to fetch product data
class Brand
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    // fetch brands name using getData Method
    public function getData($table = 'brand')
    {
        $result = $this->db->con->query("SELECT * FROM {$table} ORDER BY name");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    

}