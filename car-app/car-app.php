<?php 
    require_once('services/car.service.php');

    // var_dump($_REQUEST);
    // die('BYE');
    
    $q = (isset($_REQUEST['q']))? $_REQUEST['q'] : '';
    
    $cars = query($q);
    // var_dump($cars);
    // die('BYE');
    // print_r($cars);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars SSR App</title>
</head>
<body>
    <h1>Cars SSR App</h1>
    <h2>Server side rendering</h2>
    <form>
        <input name="q" type="search" placeholder="Filter cars" value="<?=$q?>" autofocus autocomplete="off"/>
        <button>Go</button>
    </form>

    <ul>
        <?php foreach($cars as $car) : ?>
            <li><?=$car['vendor']?></li>
        <?php endforeach ?>
    </ul>

    <a href="index.html">Index App</a>
</body>
</html>