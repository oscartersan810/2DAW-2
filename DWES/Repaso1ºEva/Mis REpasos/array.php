<?php
// Array asociativo con un array clásico como valor
$usuarios = [
    "Juan" => ["correo" => "juan@example.com", "edad" => 25, "hobbies" => ["leer", "fútbol", "cocinar"]],
    "Ana" => ["correo" => "ana@example.com", "edad" => 30, "hobbies" => ["bailar", "viajar"]],
    "Luis" => ["correo" => "luis@example.com", "edad" => 28, "hobbies" => ["correr", "música", "videojuegos"]]
];

// Accediendo a los datos
echo "Información de Juan:\n";
echo "Correo: " . $usuarios["Juan"]["correo"] . "\n";
echo "Edad: " . $usuarios["Juan"]["edad"] . "\n";
echo "Hobbies: " . implode(", ", $usuarios["Juan"]["hobbies"]) . "\n";

echo "\nInformación de Ana:\n";
echo "Correo: " . $usuarios["Ana"]["correo"] . "\n";
echo "Edad: " . $usuarios["Ana"]["edad"] . "\n";
echo "Hobbies: " . implode(", ", $usuarios["Ana"]["hobbies"]) . "\n";

// Añadiendo un nuevo hobby a Luis
$usuarios["Luis"]["hobbies"][] = "pescar";

// Mostrando todos los hobbies de Luis
echo "\nHobbies de Luis: " . implode(", ", $usuarios["Luis"]["hobbies"]) . "\n";
?>
<?php
// Array clásico con arrays asociativos dentro
$productos = [
    ["nombre" => "Laptop", "precio" => 800, "stock" => 10],
    ["nombre" => "Celular", "precio" => 500, "stock" => 20],
    ["nombre" => "Tablet", "precio" => 300, "stock" => 15]
];

// Array asociativo con arrays asociativos dentro
$categorias = [
    "electronica" => [
        "productos" => [
            ["nombre" => "TV", "marca" => "Samsung", "precio" => 1000],
            ["nombre" => "Auriculares", "marca" => "Sony", "precio" => 150]
        ]
    ],
    "hogar" => [
        "productos" => [
            ["nombre" => "Sofá", "marca" => "Ikea", "precio" => 600],
            ["nombre" => "Mesa", "marca" => "HomeDepot", "precio" => 200]
        ]
    ]
];

// Accediendo a datos del array clásico
echo "Listado de productos:\n";
foreach ($productos as $producto) {
    echo "Nombre: " . $producto["nombre"] . ", Precio: $" . $producto["precio"] . ", Stock: " . $producto["stock"] . "\n";
}

echo "\n";

// Accediendo a datos del array asociativo
echo "Productos en la categoría electrónica:\n";
foreach ($categorias["electronica"]["productos"] as $producto) {
    echo "Nombre: " . $producto["nombre"] . ", Marca: " . $producto["marca"] . ", Precio: $" . $producto["precio"] . "\n";
}
?>
