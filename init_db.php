<?php
require_once 'basedatos.php';

try {
    $sql = file_get_contents(__DIR__ . '/sql/generacion_tablas.sql');
    $pdo->exec($sql);
    echo "Tablas creadas correctamente";
} catch (Exception $e) {
    echo $e->getMessage();
}
