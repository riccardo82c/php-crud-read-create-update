<?php 

	/* includo l'header prendendolo da templates */
	include __DIR__ . '/partials/templates/header.php';
	/* includo la connessione al db che mi restituisce una query */
	include __DIR__ . '/partials/home/server.php';
	
?>

<body>

<div class="container content">
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
		<?php foreach ($results as $rooms) : ?>
		<tr>
			<td><?= $rooms['id']?></td>
			<td><?= $rooms['room_number']?></td>
			<td><?= $rooms['floor']?></td>
			<td><a href="#" class="btn btn-primary stretched-link">INFO</a></td>
			<td><a href="#" class="btn btn-warning stretched-link">UPDATE</a></td>
			<td><a href="#" class="btn btn-danger stretched-link">DELETE</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
	
</body>
</html>