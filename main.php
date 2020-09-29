<?php 

	/* includo l'header prendendolo da templates */
	include __DIR__ . '/partials/templates/header.php';
	/* includo la connessione al db che mi restituisce una query */
	include __DIR__ . '/partials/home/server.php';
	
?>

<body>

<div class="container content">
<h1 class='text-center'>Riepilogo stanze</h1>
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Numero stanza</th>
			<th>Numero piano</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>

	</thead>
	<tbody>
		<?php foreach ($results as $room) : ?>
		<tr>
			<td><span class="badge badge-primary badge-pill"><?= $room['id']?></span></td>
			<td><?= $room['room_number']?></td>
			<td><?= $room['floor']?></td>
			<td><a href="info.php?id=<?= $room['id']; ?>" class="btn btn-primary">VIEW</a></td>
			<td><a href="#" class="btn btn-warning">UPDATE</a></td>
			<td><a href="#" class="btn btn-danger">DELETE</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
	
</body>
</html>