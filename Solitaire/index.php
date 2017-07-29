<!DOCTYPE html>
<?php
$index = 0;
require 'Cards.php';
$factory = new Deck();
$deck = $factory -> getDeck();

session_start();


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
        

        if(isset($_POST['on'])){
            echo "<p>the card was = " . $GLOBALS['index'] . "</p>";
            $GLOBALS['index'] = $GLOBALS['index'] + 1 % 52; 
            echo "<p>the current card = " . $GLOBALS['index'] . "</p>";
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