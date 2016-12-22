<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('rupiah')){

    function rupiah($uang){
        $duit = 'Rp '.number_format($uang,2,',','.');
        return $duit;
    }
}    
