<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Cases
</div>

<?php

include_once 'conn.php';

$sql = "SELECT * FROM Cases;";
$result = sqlsrv_query($conn,$sql);
$i=1;

	while($row = sqlsrv_fetch_array($result,2)){
?>		
		<div class="ItemData" id="<?php echo $i ?>" ><br>
	    <h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4> Case Type : <?php echo $row['Case_Type']; ?></h4>
		<h4> Side Panel : <?php echo $row['Side_Panel']; ?></h4>
		<h4> HDD/SDD Bays : <?php echo $row['HDD_SDD_Bays']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
	$i++;
	}
?>
