<?php
$question = array();
$first = array();
$second= array();
$third = array();
$answer = array();
$genre = array(); 
//配列の作成

$URL = mysqli_connect('localhost','root','','quiz');
mysqli_set_charset($URL,'UTF8');
//sqlからデータをもってきている

$sql = 'SELECT * FROM `quiz`';
$rst = mysqli_query($URL,$sql);
while($row=mysqli_fetch_array($rst)){
    array_push($question,$row['quetion']);
    array_push($question,$row['ganre']);
    array_push($first,$row['first']);
    array_push($second,$row['second']);
    array_push($third,$row['third']);
    array_push($answer,$row['Answer']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for($i=0;$i<count($question);$i++):
    ?>
    <form action="./receive.php" method='post'>
    <p>問題:<?php print $question[$i]?></p>
    <p><input type="checkbox" name = <?php  $genre[$i]?>  value = <?php print $first[$i]?>><?php print $first[$i]?></p>
    <p><input type="checkbox" name = <?php  $genre[$i]?> value= <?php print $second[$i]?>><?php print $second[$i]?></p>
    <p><input type="checkbox" name = <?php print $genre[$i]?> value= <?php print $third[$i]?>><?php print $third[$i]?></p>
    <?php endfor?>
    <p><input type="submit" name ='sub' value="送信"></p>
</form>
</body>
</html>

