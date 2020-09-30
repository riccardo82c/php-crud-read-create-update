<?php 
	/* includo l'header prendendolo da templates */
	include __DIR__ . '/partials/templates/header.php';
	/* includo la connessione al db che mi restituisce una query */
	include __DIR__ . '/partials/home/server.php';
	
?>

<body>

<div class="container content">
<h1 class='text-center'>Riepilogo stanze</h1>


<?php 

if (!empty($_GET['id']) ) { 

	if($_GET['id'] != 'null'){	$idDeleted = $_GET['id'];?>
	<div class="delete-result bg-success p-2">
		E' stata correttamente cancellata la stanza con ID: <strong><?=$idDeleted?></strong>
	</div>
	<?php } else { ?>
	<div class="delete-result bg-warning p-2">
		Non è stato possibile cancellare la stanza
	</div>
	<?php }; ?>
<?php } else {}?>

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
			<td>
			<form action="partials/delete/server.php" method="post">
				<input type="hidden" name="id" value='<?= $room['id']; ?>'>
				<input type="submit" value="DELETE" class="btn btn-danger">
			</form>
			</td>

		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>

<?php include __DIR__ . '/partials/templates/footer.php'; ?>
	
</body>
</html>