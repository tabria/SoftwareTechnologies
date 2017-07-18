<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if (isset($_GET['num'])){
        $cycles = intval($_GET['num']);
        $firstPrev = 0;
        $secondPrev = 1;
        while($cycles>0){
            $currentNumber = $firstPrev + $secondPrev;
            echo $currentNumber . " ";
            $secondPrev = $firstPrev;
            $firstPrev = $currentNumber;
            $cycles--;
        }
    }
    ?>
</body>
</html>