<?php

require_once __DIR__ . '/Config/Sentry/bootstrap_sentry.php';

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
        <button type="submit" name="submit">Aceptar</button>
    </form>

    <?php if ($result !== null) : ?>
        <p><strong>Suma:</strong> <?= $result ?></p>
    <?php endif; ?>

    <?php
    if (isset($_REQUEST['submit'])) {
        try {
            $result = $calculator->div((float)$_GET['a'], (float)$_GET['b']);
            
        } catch (Throwable $e) {
            Sentry\captureException($e);
            $error = $e->getMessage();
        }
    }
    ?>
    <p><strong>Division:</strong> <?= $result ?></p>


    <?php if ($error) : ?>
        <p style="color:red"><?= $error ?></p>
    <?php endif; ?>
</body>

</html>