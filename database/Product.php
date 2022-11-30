<?php

//Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }   


    // fetch product data using getData Method
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
    

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch product only for New Product section
    public function newProducts($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM product ORDER BY item_register DESC LIMIT 8");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch product only for Top Product section
    public function topProducts($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE item_price_new IS NOT NULL LIMIT 8");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // fetch product by they id
    public function getProductById($item_id = null, $table = 'product'){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    /// CATEGORY SECTION FOR PRODUCT
    public function getProductsBySex($sex)
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = $sex");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProductsByCatAndBrand($sex, $cat_id, $in)
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = $sex AND cat_id = $cat_id AND brand_id IN ($in)");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProductsByCat($sex, $cat)
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = $sex AND cat_id = $cat");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProductsByBrand($sex, $in)
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = $sex AND brand_id IN ($in)");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }


    public function newProductsForMan($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = 1 ORDER BY item_register DESC LIMIT 6");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function newProductsForWoman($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = 2 ORDER BY item_register DESC LIMIT 6");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function newProductsForKids($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM product WHERE sex_id = 3 ORDER BY item_register DESC LIMIT 6");


        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }








    
}





?>


