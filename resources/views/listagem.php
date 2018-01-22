<!DOCTYPE html>
<html>
<head>
	<title>Listgem de produtos</title>
</head>
<body>
	<h1>Listgem de produtos</h1>
	<table>
		<?php foreach($produtos as $p): ?>
		<tr>
			<td><?= $p->nome ?></td>
			<td><?= $p->valor ?></td>
			<td><?= $p->descricao ?></td>
			<td><?= $p->quantidade ?></td>
		</tr>
	<?php endforeach ?>
	</table>

</body>
</html>