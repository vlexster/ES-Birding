<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 11:21 AM
 */
session_start();
session_destroy();


?>
<html>
<head>
    <title>ES-Birding</title>
</head>
<body>
<script> function enable(){ document.getElementById('TBE').disabled = false;}</script>
Значи си видял пиле? Дай да видим какво е било :)
<br><br><br>
Колко голямо беше пилето?
<form action="get_beak.php" target="_self" methog="POST">
    <input type="radio" name="body_size" value="0" onclick="enable();">по-малко от гълъб<br>
    <input type="radio" name="body_size" value="1" onclick="enable();">по-голямо от гълъб, но по-малко от кокошка<br>
    <input type="radio" name="body_size" value="2" onclick="enable();">по-голямо от кокошка<br><br>
    <input type="submit" value="Продължи нататък" id="TBE" disabled=true>
</form>
</body>
</html>