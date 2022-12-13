<?php
//OPERADORES ARITMETICOS
//SUMA +
//RESTA -
//MULTIPLICACION *
//DIVISION /
//MODULO %

$num1=15.33;
$num2=10;
/* OPERACIONEES ALMACENADAS EN VARIABLES */
$suma=$num1+$num2;
$resta=$num1-$num2;
$multiplicacion=$num1*$num2;
$div=$num1/$num2;
$modulo=$num1%$num2;


echo "La suma es: ".$num1+$num2."<br>";
echo "La resta es: ".$num1-$num2."<br>";
echo "La multiplicacion es: ".$num1*$num2."<br>";
echo "La division es: ".$num1/$num2."<br>";
echo "El modulo es: ".$num1%$num2."<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>SUMA</th>
                <th>RESTA</th>
                <th>MULTIPLICACION</th>
                <th>DIVISION</th>
                <th>MODULO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $num1+$num2; ?></td>
                <td><?php echo $num1-$num2; ?></td>
                <td><?php echo $multiplicacion; ?></td>
                <td><?php echo $div; ?></td>
                <td><?php echo $modulo; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>