
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
     $genre = $_POST['スポーツ'];
     ?>
    <?php foreach($genre as $user_answer):?>
    <h1><?php 
    if($user_answer == 'サッカー'):
        print '正解';
    else:
       print '正解はサッカーです';
    endif;
    ?></h1>
    <p>小学生から中学まではサッカー、高校からはフットサルをしていました。</p>
    <?php endforeach ?>
</body>
</html>