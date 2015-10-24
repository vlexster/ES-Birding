<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 11:21 AM
 */
require_once "admin/db_connect.php";
session_start();
$_SESSION['llen'] = mysql_real_escape_string($_GET['llen']);
$query = "SELECT * FROM birds WHERE body_size = ".$_SESSION['body_size']." AND beak_length = ".$_SESSION['blen']." AND legs_length = ".$_SESSION['llen'];
$res = mysqli_fetch_assoc(mysqli_query($link, $query));

if ($res['body_size']==0) $bsize = "по-малко от това на гълъб"; elseif ($res['body_size']==0) $bsize = "по-голямо от това на гълъб, но по-малко от кокошка"; else $bsize = "по-голямо от това на кокошка";
if ($res['beak_length'] == 0) $beak = "къс"; else $beak = "дълъг";
if ($res['legs_length'] == 0) $legs = "къси"; else $legs = "дълги";

?>
<html>
<head>
    <title>ES-Birding</title>
</head>
<body>
Хммм... Да видим.. Птица с тяло, <?php echo $bsize.", ".$beak." клюн и ".$legs?> крака?...
<br><br>
Според мен си видял <?php echo $res['species']?><br>
<img src="<?php echo $res['img'];?>">
<br><br>
<a href="index.php">Опитай пак!</a>

</body>
</html>