<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Memory 
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Memory;";
$result = sqlsrv_query($conn,$sql);
	
	while($row = sqlsrv_fetch_array($result,2)){
?>	
		<div class="ItemData"><br>
		<h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4> Speed : <?php echo $row['Speed']; ?></h4>
		<h4> CAS Latency : <?php echo $row['CAS_Latency']; ?></h4>
		<h4> Modules : <?php echo $row['Modules']; ?></h4>
		<h4> Timing : <?php echo $row['Timing']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
		}
?>
