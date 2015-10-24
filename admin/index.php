<html>
<head><title>admin - lister</title></head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Vladislav Tachev
 * Date: 10/24/2015
 * Time: 10:56 AM
 */

require_once 'db_connect.php';

$query = "SELECT * FROM birds WHERE 1";
$res = mysqli_fetch_all(mysqli_query($link, $query));
//echo "<table border=1><tr>
//        <th>Species</th>
//        <th>Body size</th>
//        <th>Body color</th>
//        <th>Beak length</th>
//        <th>Beak color</th>
//        <th>Legs length</th>
//        <th>Legs color</th>
//        <th>Is a bird of prey?</th>
//        </tr>";
echo "<table border=1><tr>
        <th>Species</th>
        <th>Body size</th>
        <th>Beak length</th>
        <th>Legs length</th>
        </tr>";
foreach ($res as $row){
    if ($row[3] == 0) $bod_size = "small"; elseif ($row[3] == 1) $bod_size = "medium"; else $bod_size = "big"; // razmer na tqloto
//    if ($row[3] == 0) $body_col = 'dark'; elseif ($row[3] == 1) $body_col = 'mixed'; else $body_col = 'light';//body_col
    if ($row[4] == 0) $blen = "short"; else $blen = "long";//beak_length
//    if ($row[5] == 0) $bcol = 'dark'; elseif ($row[5] == 1) $bcol = 'light';//beak_col
    if ($row[5] == 0) $llen = "short"; else $llen = "long";//legs_length
//    if ($row[7] == 0) $lcol = 'dark'; elseif ($row[7] == 1) $lcol = 'light';//legs_col
//    if ($row[5]==0) $BOP = "nope"; else $BOP = "yes";
    echo    "<tr>
                <td>".$row[1]."</td>
                <td><img src='".$row[2]."' width=200 height=200></td>
                <td>".$bod_size."</td>
                <td>".$blen."</td>
                <td>".$llen."</td>
            </tr>";
}
echo "</table>";
?>

<br><br><br><br><hr><br>
<form target="_self" action="creator.php" method="post">
    Species: <input type="text" name="species"><br>
    Img url: <input type="text" name="img"><br>
    Body size: <select name="body_size"><option value="0">small (smaller than a pigeon)</option><option value="1">medium (between a chicken and a pigeon)</option><option value="2">large (larger than a chicken)</option></select><br>
    <!-- Body color: <select name="body_color"><option value="0">dark</option><option value="1">mixed</option><option value="2">light</option></select><br> -->
    Beak length: <select name="blen"><option value="0">short</option><option value="1">long</option></select><br>
    <!-- Beak color: <select name="bcol"><option value="0">dark</option><option value="1">light</option></select><br> -->
    Legs length: <select name="llen"><option value="0">short</option><option value="1">long</option></select><br>
    <!-- Legs color: <select name="lcol"><option value="0">dark</option><option value="1">light</option></select><br> -->
    <!-- Is it a bird of prey: <select name="bop"><option value="0">no</option><option value="1">yes</option></select><br> -->
    <input type="submit" value="Add to KB">
</form>

</body>
</html>