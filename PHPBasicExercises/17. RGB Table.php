<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
    <?php
        function pickColor (int $colorValue, int $position) : string {
            $colorBG = "rgb($colorValue, 0, 0)";
            switch($position){
                case 1:
                    $colorBG = "rgb(0, $colorValue, 0)";
                    break;
                case 2:
                    $colorBG = "rgb(0, 0, $colorValue)";
                    break;
            }
            return $colorBG;
        }

        for($i=51;$i<=255; $i+=51){
            echo"<tr>";
            for ($k=0; $k<3; $k++){
                $color = pickColor($i, $k);
                echo "<td style='background-color: $color'></td>";
            }
            echo"</tr>";
        }
    ?>
</table>
</body>
</html>