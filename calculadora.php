<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <style> .res {color: blue; font-weight: bold; }</style>
</head>
<body>
    
        <form method="POST">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" step="any" required>
            <br><br>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" step="any" required>
            <br><br>
            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <br><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    function calcular($num1, $num2, $operacion) {
        switch ($operacion) {
            case "sumar":
                return $num1 + $num2;
            case "restar":
                return $num1 - $num2;
            case "multiplicar":
                return $num1 * $num2;
            case "dividir":
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Error: División por cero";
                }
            }
        }

    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacion"])) {

        $num1 = (float)$_POST["num1"];
        $num2 = (float)$_POST["num2"];
        $operacion = $_POST["operacion"];

        $resultado = calcular($num1, $num2, $operacion);
        echo "<p class='res'>El resultado es: $resultado</p>";
    }
    ?>
</body>
</html>