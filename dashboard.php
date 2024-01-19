<?php include "header.php"?>

<div class="dashboard-container">

	<b><div class="dashboard-heading">DASHBOARD</div></b>
	
	<hr>
<div class="container">
	<div class="row">
		<?php 
			
			$sql = "SELECT COUNT(*) AS Users FROM users";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$count = $row['Users'];
		
		?>
		<div class="col-md-3">
			<a href="userlis.php">
			<div class="card2">
				<div class="card-body">
					<span>Total Users</span><br>
					<span>(<?php echo $count; ?>)</span>
				</div>
			</div>
			</a>	
		</div>

		<div class="col-md-3">
			<a href="location.php">
			<div class="card1">
				<div class="card-body">


					<?php
            					$sql = "SELECT COUNT(*) AS locations FROM locations";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								$count = $row['locations'];
     				 ?> 
				 	 <span>Locations</span><br>
					<span>(<?php echo $count; ?>)</span> 

				</div>
			</div>
			</a>
		</div>

		

		<div class="col-md-3">
			<div class="card3">
				<div class="card-body">
					 <span>Test 1</span>
					
				</div>
			</div>
			</a>
		</div>	

		<div class="col-md-3">
			<div class="card4">
				<div class="card-body">
					<span>Test 2</span>
				</div>
			</div>	
		</a>
		</div>	

<?php include "footer.php" ?>
