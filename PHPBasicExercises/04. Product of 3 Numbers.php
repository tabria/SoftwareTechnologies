<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        X: <input type="text" name="num1" />
		Y: <input type="text" name="num2" />
        Z: <input type="text" name="num3" />
		<input type="submit" />
    </form>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){

        $numbers = $_GET;
        $negativeNumbers = 0;
        foreach ($numbers as $number){
            $number = intval($number);
            if ($number == 0){
                echo "Positive";
                return;
            }
            if ($number < 0) {
                $negativeNumbers++;
            }
        }
        if ($negativeNumbers % 2 == 0){
            echo "Positive" . "<br/>";
        } else {
            echo "Negative" . "<br/>";
        }
    }
    ?>
</body>
</html>