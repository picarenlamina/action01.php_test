<?php
require_once __DIR__ . '/Helper/Calculator.php';

use App\Helper\Calculator;

$calculator = new Calculator();
$result = null;
$error = null;

if (isset($_GET['a'], $_GET['b'])) {
    if (is_numeric($_GET['a']) && is_numeric($_GET['b'])) {
        $result = $calculator->sum((float)$_GET['a'], (float)$_GET['b']);
    } else {
        $error = "Los valores deben ser numéricos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
<h1>Calculadora simple</h1>

<form method="get">
    <input type="text" name="a" placeholder="Número A" required>
    <input type="text" name="b" placeholder="Número B" required>
    <button type="submit">Sumar</button>
</form>

<?php if ($result !== null) : ?>
<p><strong>Resultado:</strong> <?= $result ?></p>
<?php endif; ?>

<?php if ($error) : ?>
<p style="color:red"><?= $error ?></p>
<?php endif; ?>
</body>
</html>
