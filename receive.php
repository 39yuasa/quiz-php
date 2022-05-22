<!-- <?php 
if(isset($_POST['sub'])){
    $a = $_POST['one'];
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $a = $_POST['one'] ;?>
    <?php foreach($a as $item): ?>
    <p><?php print $item ?></p>
    <?php endforeach ?>
</body>
</html>