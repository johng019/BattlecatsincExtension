<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Storage Devices
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM STORAGE_DEVICES;";
$result = sqlsrv_query($conn,$sql);
$i=1;

	while($row = sqlsrv_fetch_array($result,2)){	
?>
		<div class="ItemData" id="<?php echo $i ?>" ><br>
		<h4>Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Device Name : <?php echo $row['Storage_Device_Name']; ?></h4>
		<h4> Capacity : <?php echo $row['Capacity']; ?></h4>
		<h4> Type : <?php echo $row['Storage_Type']; ?></h4>
		<h4> Cache : <?php echo $row['Cache']; ?></h4>
		<h4> Form Factor : <?php echo $row['Form_Factor']; ?></h4>
		<h4> Interface : <?php echo $row['Interface']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
	$i++;
	}
?>
