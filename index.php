<?php
include ('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		<h1 class="bg-info text-white text-center p-5"> Autocisternos</h1>
		<div class="row">
			<div class="col-md-12 col-sm-3">
				<table class="table table-bordered text-center">
					<thead>
						<tr>	
							<th rowspan="3">Width</th>
							<th rowspan="3">Depth</th>
							<th rowspan="3">Lenght</th>
							<th rowspan="3">Volume</th>
							<th colspan="6">Autosisternu kiekis</th>
						</tr>
						<tr>
							<th colspan="2"> 120m3</th>		
							<th colspan="2">170m3</th>		
							<th colspan="2"> 220m3</th>		
						</tr>
						<tr>
							<th> Kiekis</th>
							<th> Kaina</th>
							<th> Kiekis</th>
							<th> Kaina</th>
							<th> Kiekis</th>
							<th> Kaina</th>
						</tr>
							</thead>
							<tbody>
								<?php for ($length=10; $length <=40 ; $length++) { ?>
									<tr>
										<td>10</td> 
										<td>3</td> 
										<td><?= $length ?></td> 
										<td><?= getVolume(10,3,$length) ?></td>
										<td><?= getTankCount(120,getVolume(10,3,$length)) ?></td>
										<td><?= getTankPrice(120)*getTankCount(170,getVolume(10,3,$length)) ?></td>
										<td><?= getTankCount(170,getVolume(10,3,$length)) ?></td>
										<td><?= getTankPrice(170)*getTankCount(170,getVolume(10,3,$length)) ?></td>
										<td><?= getTankCount(220,getVolume(10,3,$length)) ?></td>
										<td><?= getTankPrice(220)*getTankCount(220,getVolume(10,3,$length)) ?></td>
									</tr>	
								<?php } ?>
							</tbody>	
						</table>
					</div>
				</div>
			</div>

		</body>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</html>