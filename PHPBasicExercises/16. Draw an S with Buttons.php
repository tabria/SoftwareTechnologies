<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
    function printBlueHLine(){
        for($i=1; $i<=5; $i++){
            echo "<button style='background-color: blue'>1</button>";
        }
        echo "<br/>";
    }
    function printMiddleHLine($direction){
        for($k=1; $k<=5; $k++){
            if (($k==1 && $direction=="left") || ($k==5 && $direction=="right")){
                echo "<button style='background-color: blue'>1</button>";
            } else {
                echo "<button>0</button>";
            }
        }
        echo "<br/>";
    }
    $direction = "left";
    printBlueHLine();
    for($i=2; $i<=9; $i++){
        if ($i==5 || $i==9){
            $direction ="right";
            printBlueHLine();
        }
        else {
            printMiddleHLine($direction);
        }
    }
?>

</body>
</html>