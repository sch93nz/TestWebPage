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
        <input type="image" name="on" src="Cards/back-cards.jpg" onFunc();?> value="deck" width=20% >
        <img <?php echo  onFunc();?> width=20% >

        <?php

        if(isset($_POST['on'])=="image"){
            $_SESSION["Index"] = ($_SESSION["Index"]  + 1) % 52 ; 
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