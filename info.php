<?php 
include __DIR__ . '/partials/templates/header.php';
include __DIR__ . '/partials/info/server.php';
?>

<body>
	<div class="centrato">
		<div class="container">
			<?php if (isset($_GET['flag'])) { ?>
			<div class='alert bg-success'>Modifica avvenuta con successo</div>
			<?php }?>
			<ul class="list-group">
				<li class="list-group-item bg-info text-white"><strong>ID camera: </strong><?= $row['id'] ?></li>
				<li class="list-group-item"><strong>Numero camera: </strong><?= $row['room_number'] ?></li>
				<li class="list-group-item"><strong>Piano: </strong><?= $row['floor'] ?></li>
				<li class="list-group-item"><strong>Numero letti: </strong><?= $row['beds'] ?></li>
			</ul>
		</div>
	</div>
	<?php include __DIR__ . '/partials/templates/footer.php'; ?>
</body>

</html>