<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
<?php
    for($i=0; $i<255; $i+=51){
        echo "<div style='background-color: rgb($i, $i, $i)'></div>";
        $color = $i;
        for ($k=1; $k<=9; $k++){
            $color +=5;
            echo "<div style='background-color: rgb($color, $color, $color)'></div>\n";
        }
        echo "<br/>\n";
    }
?>
</body>
</html>