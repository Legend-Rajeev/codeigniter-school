<?php

class Prac
{

    public function test(){
        $ci = get_instance();
        $ci->load->helper('array');
        $arr = ['1'=>'Rajiv', '2'=>'Sumit', '3'=>'Mohan'];
        echo element('1', $arr, 'Not Found!');
        echo "<br>";
        echo "This is for testing!";
    }

}

?>