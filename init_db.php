<?php
require_once 'basedatos.php';

try {
    $sql = file_get_contents(__DIR__ . '/sql/generacion_tablas.sql');
    $conn->exec($sql);   // 👈 AQUÍ EL CAMBIO
    echo "Tablas creadas correctamente";
} catch (Exception $e) {
    echo $e->getMessage();
}

