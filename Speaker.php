
<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Speakers
</div>

<?php

include_once 'conn.php';

$sql = "SELECT * FROM Speaker;";
$result = sqlsrv_query($conn,$sql);
$i=1;

	while($row = sqlsrv_fetch_array($result,2)){	
?>
	    <div class="ItemData" id="<?php echo $i ?>" ><br>
	    <h4 font-weight:bold>Item Number : <?php echo $row['ID']; ?></h4>
		<h4 font-weight:bold>Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4 font-weight:bold>Configuration : <?php echo $row['Configuration_At']; ?></h4>
		<h4 font-weight:bold>Total Wattage : <?php echo $row['Total_Wattage']; ?></h4>
		<h4 font-weight:bold>Frequency Response : <?php echo $row['Frequency_Response']; ?></h4>
		<h4 font-weight:bold> Price :  <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4 font-weight:bold > Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
	$i++;
	}
?>
