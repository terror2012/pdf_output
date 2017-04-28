<?php

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 4/25/2017
 * Time: 7:35 AM
 */
class core_code
{
    function __construct()
    {

    }
    public function send_email($email, $pdf)
    {

    }
    public function create_pdf()
    {

    }
    public function preg_grep_keys( $pattern, $input, $flags = 0 )
    {
        $keys = preg_grep( $pattern, array_keys( $input ), $flags );
        $vals = array();
        foreach ( $keys as $key )
        {
            $vals[$key] = $input[$key];
        }
        return $vals;
    }

    public function get_amount_number($stuffArray)
    {
        $keyNumbers = [];
        for($i = 0; $i < count($stuffArray); $i++)
        {
            $name = key($stuffArray);
            $numberArray = explode('_', $name);
            array_push($keyNumbers, $numberArray['1']);
            next($stuffArray);
        }
        return $keyNumbers;
    }
    function get_array_amount_value($keyNumbers)
    {
        $itemset = [];
        for($i = 0; $i < count($keyNumbers); $i++)
        {
            $key = $keyNumbers[$i];
            $itemset[$key]['servicedescription_'.$key] = $_POST['servicedescription_'.$key];
            $itemset[$key]['netamount_'.$key] = $_POST['netamount_'.$key];
            $itemset[$key]['vatcode_'.$key] = $_POST['vatcode_'.$key];
            $itemset[$key]['vatamount_'.$key] = $_POST['vatamount_'.$key];
        }
        return $itemset;
    }
}