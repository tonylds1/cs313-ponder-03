<?php
$name = strip_tags($_POST['firstName']);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tony Moraes' Ponder</title>
        <link rel="stylesheet" href="../css/cs313-w03.css" /> 
    </head>
   <body> 
   <!--  <body>-->
        <h1>CS 313 Ponder - Week 03</h1>
        
        <div id="container">
            <h1>Your purchase was completed!!!</h1>
            <p>Hello <?=$name; ?>, We are processing your data and soon we will give you some notice.</p>
        </div>
    </body>
</html>