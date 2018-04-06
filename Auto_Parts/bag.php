<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 9/9/17
 * Time: 12:10 PM
 */
session_start();
if(!isset($_SESSION["cart"])){
    echo 0;
}else{
    $cart=unserialize($_SESSION["cart"]);
    $keys=array_keys($cart);
    echo count($keys);
}