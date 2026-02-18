<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Sanitizar datos (seguridad básica)
    $valor1 = floatval($_POST['valor1']);
    $valor2 = floatval($_POST['valor2']);
    $valor3 = floatval($_POST['valor3']);
    $vendedor = htmlspecialchars($_POST['vendedor']);

    // Calcular total
    $total = $valor1 + $valor2 + $valor3;

    // Calcular comisión 10%
    $comision = $total * 0.10;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Venta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Venta Registrada</h2>

        <p><strong>Vendedor:</strong> <?php echo $vendedor; ?></p>
        <p><strong>Total Ventas:</strong> $ <?php echo number_format($total,2); ?></p>
        <p><strong>Comisión (10%):</strong> $ <?php echo number_format($comision,2); ?></p>

        <a href="index.html">
            <button>Registrar otra venta</button>
        </a>
    </div>
</div>

</body>
</html>
