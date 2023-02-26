<?php
/**
* PHP Mikrotik Billing (https://github.com/freedarwuin/phpdarbill/)
**/

Class Admin{
    public static function _info(){
        $id = $_SESSION['aid'];
        $d = ORM::for_table('tbl_users')->find_one($id);
        return $d;
    }
}