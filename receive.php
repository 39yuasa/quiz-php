<?php
$URL = mysqli_connect('localhost','root','','quizz');
mysqli_set_charset($URL,'UTF8');
$sql = 'SELECT * FROM `quizzz`';
$rst = mysqli_query($URL,$sql);
$answer = array();
$p = array();
// $genre = array();

while($row=mysqli_fetch_array($rst)){
array_push($answer,$row['answer']);
array_push($p,$row['Sentence']);
// array_push($genre,$row['zenre']);
}
$correct = 0;
$genres = array( $_POST['スポーツ'],$_POST['ラーメン']);
$count = count($genres);
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
    <?php for($i=0; $i < $count; $i++): ?>
    <?php foreach($genres[$i] as $user_answer):?>
    <h1><?php 
    if($user_answer == $answer[$i]):
        print '正解';
        $correct++;
    else:
       print '正解は' . $answer[$i] . 'です';
    endif;
    ?></h1>
    <p><?php print $p[$i] ;?></p>
    <?php endforeach ?>
    <?php endfor ?>

    <p>得点は<?php print $correct?>です</p>
</body>
</html>


<!-- for文がない場合2回しか回っていない -> 4回、回っているのはfor文のせい -->
<!-- いや違うかもしれない -->
<!-- 配列数は2 -->
<!-- count数的にはfor文があっている -->
<!-- foreachのときcountの表記がおかしい -->