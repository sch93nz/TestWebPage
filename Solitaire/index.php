<!DOCTYPE html>
<?php

require 'Cards.php';
session_start();


if (!isset($_SESSION['Index'])){
    $_SESSION["Index"] = 0;
} 

if (!isset($_SESSION['Deck'])){
    $factory = new Deck();
    shuffle($factory);
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
    <div> <input tyoe="button" name="restart" value="dead"></div>
    <div>
        <form action="index.php" method="post">
        <input type="image" name="on" src="Cards/back_cards.png" value="deck" width=14% >
        <img <?php echo  onFunc();?> width=14% >


        <?php

        if(isset($_POST['on'])=="image"){
            $_SESSION["Index"] = ($_SESSION["Index"]  + 1) % 52 ; 
        }
        if(isset($_POST['restart'])=="button"){
            unset ( $_SESSION["Index"]);
            unset ( $_SESSION["Deck"]);
        }
        function onFunc(){
            $value = $_SESSION["Index"];
            $deck = $_SESSION['Deck'];

            $card = $deck[$value];

            $data =  $card -> getCard();
            return 'src="' . $data . '"';
        }


        ?>
    </div>
    <div>
    <p>Created by matthew</p>
    </div>
</body>


</html>