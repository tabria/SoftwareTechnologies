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
        $number = intval($_GET['num']);
        function isPrime($number){
            if ($number == 2){
                return true;
            }
            if ($number % 2 == 0){
                return false;
            }
            $root = ceil(sqrt($number));
            for($i=3; $i<=$root; $i=$i+2){
                if ($number % $i == 0){
                    return false;
                }
            }
            return true;
        }
        for($i=$number; $i>=2; $i--){
            if (isPrime($i)){
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>