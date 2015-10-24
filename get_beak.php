<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 11:21 AM
 */
session_start();
$_SESSION['body_size'] = mysql_real_escape_string($_GET['body_size']);

?>
<html>
<head>
    <title>ES-Birding</title>
</head>
<body>
<script> function enable(){ document.getElementById('TBE').disabled = false;}</script>
Добре, а с дълъг клюн ли беше или по-скоро с къс?
<br>
<form action="get_legs.php" target="_self" methog="post">
    <input type="radio" name="blen" value="0" onclick="enable();">къс<br>
    <input type="radio" name="blen" value="1" onclick="enable();">дълъг<br>
    <input type="submit" value="Продължи нататък" id="TBE" disabled=true>
</form>
</body>
</html>