<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 10:17 AM
 */

require_once 'db_connect.php';

if(isset($_POST['species'])) $cr_spec = mysqli_real_escape_string($link, $_POST['species']);
if(isset($_POST['body_size'])) $cr_body_s = mysqli_real_escape_string($link, $_POST['body_size']);
if(isset($_POST['img'])) $cr_img = mysqli_real_escape_string($link, $_POST['img']);
if(isset($_POST['blen'])) $cr_blen = mysqli_real_escape_string($link, $_POST['blen']);
if(isset($_POST['llen'])) $cr_llen = mysqli_real_escape_string($link, $_POST['llen']);

$query = "INSERT INTO birds(species, img, body_size, beak_length, legs_length)
          VALUES ('".$cr_spec."', '".$cr_img."', ".$cr_body_s.", ".$cr_blen.",".$cr_llen.")";
mysqli_query($link, $query) or die('Error occured!');
header("Location: index.php");
//var_dump($query);