<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
          <h1>Solve the equation</h1>
    </header>
    <main>

    <?php
    $equation = 'X * 3 = 69';
    $elements = explode(" ", $equation);
    $operator = $elements[1];
    $operand = $elements[2];
    $result = $elements[4];
    $x = 0;

    switch ($operator) {
        case '*':
            $x = $result / $operand;
            break;
        default:
            echo 'Неверный оператор!';
            break;
    }

    echo "Значение X = " . $x;
    ?>

    </main>
</footer>
</body>