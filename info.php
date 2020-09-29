
<?php 
/* template dell'header */
include __DIR__ . '/partials/templates/header.php';
/* includo la connessione al db che mi restituisce una query */
include __DIR__ . '/partials/info/server.php';
?>

<body>

<div class="centrato">
	<div class="container">
	<ul class="list-group">
		<li class="list-group-item list-group-item-primary"><strong>ID camera: </strong><?= $row['id'] ?></li>
		<li class="list-group-item"><strong>Numero camera: </strong><?= $row['room_number'] ?></li>
		<li class="list-group-item"><strong>Piano: </strong><?= $row['floor'] ?></li>
		<li class="list-group-item"><strong>Numero letti: </strong><?= $row['beds'] ?></li>
	</ul>
</div>
</div>

</body>
</html>