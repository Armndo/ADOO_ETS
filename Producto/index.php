<?php

	include_once("../Model/Producto.php");

	$productos = [
		new Producto(1, "placeholder", "placeholder", "placeholder", "placeholder", "placeholder", 0.0, 0.0),
		new Producto(2, "3.1415", "PItón", "ajalalai abuh symbel", "cuckgang", "placeholder", 69, 42.0),
	];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>
	<div style="text-align: center;">
		<table border="1" style="display: inline-block;">
			<caption>Productos <button onclick="location.href='create.php'">Nuevo</button></caption>
			<thead>
				<tr>
					<th>Código de barras</th>
					<th>Nombre</th>
					<th>Código producto</th>
					<th>Categoría</th>
					<th>Costo</th>
					<th>Precio</th>
					<th>Acción</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto) { ?>
				<tr>
					<td>
						<img src="https://barcode.tec-it.com/barcode.ashx?data=<?=$producto->getBarcode()?>&code=Code128&dpi=72" alt="">
					</td>
					<td><?=$producto->getNombre()?></td>
					<td><?=$producto->getCodigo()?></td>
					<td><?=$producto->getCategoria()?></td>
					<td>$<?=$producto->getCosto()?></td>
					<td>$<?=$producto->getPrecio()?></td>
					<td>
						<button onclick="location.href='view.php?id=<?=$producto->getId()?>'">Ver</button>
						<button onclick="location.href='edit.php?id=<?=$producto->getId()?>">Editar</button>
						<form action="yeet" method="post" style="display: inline;">
							<button>Eliminar</button>
						</form>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>