<?php
require_once 'socios.php';

// 🔹 Crear un nuevo socio
$socio = new Socio(
   1, // ID de cooperativa (ajusta según tus datos)
   "Juan Pérez",
   "51234567",
   "099123456",
   "juan@example.com",
   "2025-10-20"
);
$socio->guardar();

echo "Socio creado con ID: " . $socio->getId() . "<br>";

// 🔹 Buscar socio por ID
$encontrado = Socio::buscarPorId($socio->getId());
if ($encontrado) {
   echo "Socio encontrado: " . $encontrado->getNombre() . "<br>";
}

// 🔹 Actualizar datos
$encontrado->setTelefono("098654321");
$encontrado->guardar();
echo "Socio actualizado.<br>";

// 🔹 Mostrar todos los socios
$todos = Socio::recuperarTodos();
echo "<pre>";
print_r($todos);
echo "</pre>";

// 🔹 Borrar el socio de prueba
// Socio::borrar($socio->getId());
// echo "Socio eliminado.<br>";
?>
