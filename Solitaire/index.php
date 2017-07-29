<!DOCTYPE html>
<?php

session_start();
require 'Cards.php';
$factory = new Deck();
$deck = $factory -> getDeck();;

?>
<html>
<meta charset="UTF-8">

<header>
    <title>Matthew's Solitaire</title>
    <h1>Solitaire</h1>
    <hr>
</header>

<body>
    <div>
        <form action="index.php" method="post">
        <input type="submit" name="on" value="image">
        <input type="submit" name="off" value="off">
        <?php
        
        $card = new Card("2","diamonds");
        $index = 0;

        if(isset($_POST['on'])){
            $GLOBALS['index']= $GLOBALS['index'] + 1 % 52; 
            onFunc();
        }

        if(isset($_POST['off'])){
            offFunc();
        }

        function onFunc(){
            $data = $GLOBALS['deck'][$GLOBALS['index']]->getCard();
            echo '<img src="' . $data . '">';
        }

        function offFunc(){
            echo '<h3>Button off Clicked</h3>';
        }
        ?>
    </div>
    <div>
    <p>Created by matthew</p>
    </div>
</body>


</html>