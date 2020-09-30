<?php
include __DIR__ . '/partials/templates/header.php';

include __DIR__ . '/partials/update/server.php';

?>


<body>

	<div class="centrato">
		<div class="container">
			<?php if (isset($_GET['flag']) && $_GET['flag']=='no') { ?>
			<div class='alert bg-warning'>Nessuna modifica effettuta</div>
			<?php } elseif (isset($_GET['flag']) && $_GET['flag']=='ko') {?>
			<div class='alert bg-danger'>Errore</div>
			<?php } ?>
			<form action="partials/update/edit-server.php" method="post">
				<div class="form-group">
					<label for="id">ID: </label>
					<input readonly="text" class="form-control bg-info text-white" name="id" value="<?= $row['id']?>">
				</div>
				<div class="form-group">
					<label for="room_number">Numero Camera: </label>
					<input type="number" class="form-control" name="room_number" value="<?= $row['room_number']?>">
				</div>
				<div class="form-group">
					<label for="floor">Piano: </label>
					<input type="number" class="form-control" name="floor" value="<?= $row['floor']?>">
				</div>
				<div class="form-group">
					<label for="beds">Numero Letti: </label>
					<input type="number" class="form-control" name="beds" value="<?= $row['beds']?>">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-outline-primary btn-block" value="Modifica">
				</div>

			</form>
		</div>
	</div>

	<?php include __DIR__ . '/partials/templates/footer.php'; ?>

</body>

</html>