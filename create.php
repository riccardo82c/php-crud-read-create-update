<?php
include __DIR__ . '/partials/templates/header.php';
?>

<body>
	<div class="centrato">
		<div class="container">
			<?php if (isset($_GET['check']) && $_GET['check'] == 'false') {?>
			<div class='alert bg-warning'>Attenzione - Completa tutti i campi</div>
			<?php }?>
			<?php if (isset($_GET['check']) && $_GET['check'] == 'noRoom') {?>
			<div class='alert bg-warning'>Attenzione - Numero Camera già presente</div>
			<?php }?>
			<?php if (isset($_GET['check']) && $_GET['check'] == 'error') {?>
			<div class='alert bg-danger'>Inserimento non andato a buon fine</div>
			<?php }?>
			<form action="partials/create/server.php" method="post">
				<div class="form-group">
					<label for="room_number">Numero Camera: </label>
					<input type="number" class="form-control" name="room_number" value="">
				</div>
				<div class="form-group">
					<label for="floor">Piano: </label>
					<input type="number" class="form-control" name="floor" value="">
				</div>
				<div class="form-group">
					<label for="beds">Numero Letti: </label>
					<input type="number" class="form-control" name="beds" value="">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-outline-primary btn-block" value="Crea">
				</div>

			</form>
		</div>
	</div>
	<?php include __DIR__ . '/partials/templates/footer.php';?>
</body>

</html>