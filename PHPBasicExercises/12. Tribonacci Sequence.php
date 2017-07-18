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
        $numbers = intval($_GET['num']);
        $firstPrev =0;
        $secondPrev = 0;
        $thirdPrev = 1;
        while($numbers>=0){
            $currentNumber = $firstPrev + $secondPrev + $thirdPrev;
            echo $currentNumber . " ";
            $thirdPrev = $secondPrev;
            $secondPrev = $firstPrev;
            $firstPrev = $currentNumber;
            $numbers--;

        }
    }
    ?>
</body>
</html>