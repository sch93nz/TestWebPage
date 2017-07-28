<?php 
    class card {
        $var num;
        $var suit;

        function __construct($num,$suit){
            $this->num = $num;
            $this->suit = $suit;
        }

        function getCard(){
        return "\/Cards\/" . num . "_of_" . suit . ".png";
        }


    }
?>