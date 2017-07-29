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
        <input type="image" name="on" <?php echo  onFunc();?> value="image">
        <?php

        if(isset($_POST['on'])=="image"){
            echo "<p>" . $_POST['on'] . "</p>";
            echo "<p>the card was = " . $_SESSION["Index"]  . "</p>";
            $_SESSION["Index"] = ($_SESSION["Index"]  + 1) % 52 ; 
            echo "<p>the current card = " . $_SESSION["Index"]  . "</p>";
            $_POST['on']=="no";
            echo "<p>" . $_POST['on'] . "</p>";
        }

        if(isset($_POST['off'])){
            offFunc();
        }

        function onFunc(){
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