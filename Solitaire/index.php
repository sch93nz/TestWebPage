<!DOCTYPE html>
<?php

require 'Cards.php';
session_start();


if (!isset($_SESSION['Index'])){
    $_SESSION["Index"] = 0;
} 

if (!isset($_SESSION['Deck'])){
    $factory = new Deck();
    $_SESSION["Deck"] = $factory -> getDeck();
} 

?>

<html>
<meta charset="UTF-8">

<header>
    <title>"Matthew's Solitaire"</title>
    <h1>Solitaire</h1>
    <hr>
</header>

<body>
    <div>
        <form action="index.php" method="post">
        <input type="image" name="on" src= <?php onFunc();?> >
        
        value="image">
        <?php

        if(isset($_POST['on'])){
            echo "<p>the card was = " . $_SESSION["Index"]  . "</p>";

            $_SESSION["Index"] = ($_SESSION["Index"]  + 1) % 52 ; 

            echo "<p>the current card = " . $_SESSION["Index"]  . "</p>";
            echo "<img" .  onFunc() . ">";
            unset($_POST['on']);
        }

        if(isset($_POST['off'])){
            offFunc();
        }

        function onFunc(){
            echo $_SESSION["Index"];
            $value = $_SESSION["Index"];
            $deck = $_SESSION['Deck'];

            $card = $deck[$value];

            $data =  $card -> getCard();
            return 'src="' . $data . '"';
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