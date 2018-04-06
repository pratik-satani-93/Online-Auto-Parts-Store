<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 9/22/17
 * Time: 11:49 AM
 */
session_start();
if(!isset($_SESSION["cart"])){
    $cart=serialize(array());
}else{
    $cart=unserialize($_SESSION["cart"]);
}


$id=$_POST['id'];

unset($cart[$id]);
$_SESSION["cart"]=serialize($cart);
