<?php 
	/* includo l'header prendendolo da templates */
	include __DIR__ . '/partials/templates/header.php';
	/* includo la connessione al db che mi restituisce una query */
	include __DIR__ . '/partials/home/server.php';
	
?>



<div class="container content">
<h1 class='text-center text-dark'>Riepilogo stanze</h1>


<?php 

if (!empty($_GET['id']) ) { 
	if($_GET['id'] != 'null'){	$idDeleted = $_GET['id'];?>
	<div class="alert bg-success p-2">
		E' stata correttamente cancellata la stanza con ID: <strong><?=$idDeleted?></strong>
	</div>
	<?php } else { ?>
	<div class="alert bg-warning p-2">
		Non è stato possibile cancellare la stanza
	</div>
	<?php }; ?>
<?php } else {}?>

<table class="table table-hover">
	<thead class="">
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
			<td><strong><?= $room['id']?></strong></td>
			<td><?= $room['room_number']?></td>
			<td><?= $room['floor']?></td>
			<td><a href="info.php?id=<?= $room['id']; ?>" class="btn btn-primary">VIEW</a></td>
			<td><a href="update.php?id=<?= $room['id']; ?>" class="btn btn-warning">UPDATE</a></td>
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
	
