<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 9/9/17
 * Time: 2:03 AM
 */
session_start();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=serialize(array());
}
$cart=unserialize($_SESSION["cart"]);
$id=$_POST['id'];
$_SESSION['ITEMID']=$id;

if(!isset($cart[$id])){
    $cart[$id]=1;
}
$_SESSION["cart"]=serialize($cart);
echo $id;