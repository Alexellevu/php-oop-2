<?php 

require_once __DIR__. './classes/User.php';
require_once __DIR__. './classes/Premium_user.php';
require_once __DIR__. './classes/Product.php';
require_once __DIR__. './classes/CreditCard.php';
require_once __DIR__. './classes/db.php';


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
    <?php foreach($products as $product) :?>
            <h1><?php echo $product ->name(); ?></h1>
            <p><?php echo $product ->desc(); ?></p>
            <span><?php echo $product ->price(); ?></span>
    <?php endforeach; ?>
    
    <?php foreach($products as $product) :?>
        <?php if (method_exists($user,'isPremium') && ($user->isPremium()): ?>    
        <h2> <?php $user->name();  ?> </h2>

        <?php endif; ?>
        
    <?php endforeach; ?>

</body>
</html>