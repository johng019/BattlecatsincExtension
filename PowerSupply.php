<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Power Supplys
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Power_Supply;";
$result = sqlsrv_query($conn,$sql);
	
	while($row = sqlsrv_fetch_array($result,2)){
?>		
		<div class="ItemData"><br>
		<h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4> Form Facor : <?php echo $row['Form_Factor']; ?></h4>
		<h4> Efficiency Rating : <?php echo $row['Efficiency_Rating']; ?></h4>
		<h4> Wattage : <?php echo $row['Wattage']; ?></h4>
		<h4> Modular : <?php echo $row['Modular']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
		}
?>
