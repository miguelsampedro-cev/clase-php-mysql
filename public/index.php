<?php
echo "<h1>🎉 ¡Hola alumno! Tu entorno funciona</h1>";
echo "<p>PHP versión: " . phpversion() . "</p>";

// Conexión a MySQL
try {
    $pdo = new PDO('mysql:host=db;dbname=clase;charset=utf8', 'alumno', 'alumno123');
    $pdo->setAttribute(PDO_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p style='color:green'>✅ Conexión a MySQL correcta</p>";
    
    // Mostrar tablas
    $stmt = $pdo->query("SHOW TABLES");
    $tablas = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "<p>Tablas en la BD: " . (count($tablas) ? implode(', ', $tablas) : '(ninguna todavía)') . "</p>";
} catch (PDOException $e) {
    echo "<p style='color:red'>❌ Error MySQL: " . $e->getMessage() . "</p>";
}
?>
