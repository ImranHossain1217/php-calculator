<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>php calculator</h2>
        <form action="" method="post">
            <div>
                <input class="input-field" type="number" name="num1" id="num1" placeholder="Enter First Number.." required>
            </div>
            <div>
                <input class="input-field" type="number" name="num2" id="num2" placeholder="Enter Second Number.." required>
            </div>
            <div>
                <select name="operation" class="select-item">
                    <option value="Add">Addition</option>
                    <option value="Sub">Subtraction</option>
                    <option value="Multiply">Multiplication</option>
                    <option value="Divide">Division</option>
                    <option value="Modulas">Reminder</option>
                    <option value="Binary">Binary Conversion</option>
                    <option value="Octal">Octal Conversion</option>
                    <option value="Hexadecimal">Hexadecimal</option>
                </select>
            </div>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];
                switch ($operation) {
                    case 'Add':
                        $result = $num1 + $num2;
                        echo "Result: {$result}";
                        break;
                    case 'Sub':
                        $result = $num1 - $num2;
                        echo "Result: {$result}";
                        break;
                    case 'Multiply':
                        $result = $num1 * $num2;
                        echo "Result: {$result}";
                        break;
                    case 'Divide':
                        $result = $num1 / $num2;
                        echo "Result: {$result}";
                        break;
                    case 'Modulas':
                        $result = $num1 % $num2;
                        echo "Result: {$result}";
                        break;
                    case "Binary":
                        echo "Binary: " . decbin($num1);
                        break;
                    case "Octal":
                        echo "Octal: " . decoct($num1);
                        break;
                    case "Hexadecimal":
                        echo "Hexadecimal: " . dechex($num1);
                        break;
                    default:
                        echo "Enter valid number";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>