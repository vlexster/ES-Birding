<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 11:21 AM
 */
session_start();
$_SESSION['blen'] = mysql_real_escape_string($_GET['blen']);

?>
<html>
<head>
    <title>ES-Birding</title>
</head>
<body>
<script> function enable(){ document.getElementById('TBE').disabled = false;}</script>
Добре, а краката му дълги или къси бяха??
<br>
<form action="result.php" target="_self" methog="post">
    <input type="radio" name="llen" value="0" onclick="enable();">къси<br>
    <input type="radio" name="llen" value="1" onclick="enable();">дълги<br>
    <input type="submit" value="Нека проверим" id="TBE" disabled=true>
</form>
</body>
</html>