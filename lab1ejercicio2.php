<?php
// Definimos un array asociativo con los datos proporcionados
$empleados = array(
    array("Departamento" => "R.R.H.H", "Empleado" => "Margarita", "Salario" => 3500),
    array("Departamento" => "Contabilidad", "Empleado" => "Alberto", "Salario" => 2000),
    array("Departamento" => "Finanzas", "Empleado" => "Maria", "Salario" => 2500),
    array("Departamento" => "Gerencia", "Empleado" => "Anastacia", "Salario" => 3000),
    array("Departamento" => "Finanzas", "Empleado" => "Bladimir", "Salario" => 1000),
    array("Departamento" => "Contabilidad", "Empleado" => "Andres", "Salario" => 3000),
    array("Departamento" => "R.R.H.H", "Empleado" => "Carmen", "Salario" => 15000)
);

// Mostramos los datos del array en una tabla HTML
echo "<table border='1'>";
echo "<tr><th>Departamento</th><th>Empleado</th><th>Salario</th></tr>";
foreach ($empleados as $empleado) {
    echo "<tr>";
    echo "<td>" . $empleado['Departamento'] . "</td>";
    echo "<td>" . $empleado['Empleado'] . "</td>";
    echo "<td>" . $empleado['Salario'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Calculamos el salario promedio
$total_salarios = 0;
foreach ($empleados as $empleado) {
    $total_salarios += $empleado['Salario'];
}
$promedio_salarios = $total_salarios / count($empleados);
echo "El salario promedio es: " . $promedio_salarios;

// Contamos la cantidad de empleados por departamento
$empleados_por_departamento = array();
foreach ($empleados as $empleado) {
    $departamento = $empleado['Departamento'];
    if (array_key_exists($departamento, $empleados_por_departamento)) {
        $empleados_por_departamento[$departamento]++;
    } else {
        $empleados_por_departamento[$departamento] = 1;
    }
}
echo "<br>";
echo "Cantidad de empleados por departamento:";
echo "<ul>";
foreach ($empleados_por_departamento as $departamento => $cantidad) {
    echo "<li>" . $departamento . ": " . $cantidad . "</li>";
}
echo "</ul>";
?>