<!DOCTYPE html>
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
        <input type="submit" name="on" value="on">
        <input type="submit" name="off" value="on">
        <?php
        if(isset($_POST['on'])){
            onFunc();
        }
        if(isset($_POST['off'])){
            offFunc();
        }

        function onFunc(){
            echo '<h3>Button on Clicked</h3>';
        }

        function offFunc(){
            echo '<h3>Button off Clicked</h3>'
        }
        ?>
    </div>
    <div>
    <p>Created by matthew</p>
    </div>
</body>


</html>