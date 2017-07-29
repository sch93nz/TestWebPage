<!DOCTYPE html>
<?php

session_start();
$_SESSION["Index"] = 0;
require 'Cards.php';
$factory = new Deck();
$deck = $factory -> getDeck();


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
        <?php

        if(isset($_POST['on'])){
            echo "<p>the card was = " . $_SESSION["Index"]  . "</p>";
            $_SESSION["Index"] = $_SESSION["Index"]  + 1 % 52; 
            echo "<p>the current card = " . $_SESSION["Index"]  . "</p>";
            onFunc();
        }

        if(isset($_POST['off'])){
            offFunc();
        }

        function onFunc(){
            $data = $GLOBALS['deck'][$_SESSION["Index"] ]->getCard();

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