<!DOCTYPE html>
<?php

require 'Cards.php';
session_start();


if (!isset($_SESSION['Index'])){
    $_SESSION["Index"] = 0;
} 

if (!isset($_SESSION['Deck'])){
    $factory = new Deck();
    $deck = $factory -> getDeck();
    shuffle($deck);
    shuffle($deck);
    $_SESSION["Deck"] = $deck;
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
            <input type="image" name="on" src="Cards/back_cards.png"
             value="deck" width=13% >
            <img <?php echo  onFunc();?> width=13% >
            <img src="Cards/Empty.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            </br>
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
            <img src="Cards/blank.png" width=13% >
        </form>
        <?php

        if(isset($_POST['on'])){
            $_SESSION["Index"] = ($_SESSION["Index"]  + 1) % 52 ; 
        }

        if(isset($_POST['restart'])){
            unset ( $_SESSION["Index"]);
            unset ( $_SESSION["Deck"]);
            session_destroy();
            
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