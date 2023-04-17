<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bad Words</h1>

    <?php 
     $badword = $_GET['badword'];
     $phrase = $_GET['phrase'];
     $newPhrase = str_replace($_GET['badword'], 'xxx', $_GET['phrase'])
    ?>

    <span>Il testo:"<?php echo $phrase ?>" era lungo <?php echo strlen($phrase); ?> caratteri.</span>
    <br>

    <span> Dopo la censura: "<?php echo $newPhrase; ?>"
     è lungo <?php echo strlen($newPhrase); ?> caratteri</span>
<?php 



?>

<br>

<button><a href="index.html">torna alla home</a></button>

</body>
</html>