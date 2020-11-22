<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Motherboards
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Motherboard;";
$result = sqlsrv_query($conn,$sql);
$i=1;

	while($row = sqlsrv_fetch_array($result,2)){	
?>
		<div class="ItemData" id="<?php echo $i ?>" ><br>
		<h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Board Name : <?php echo $row['Board_Name']; ?></h4>
		<h4> Socket : <?php echo $row['Socket']; ?></h4>
		<h4> Form Factor : <?php echo $row['Form_Factor']; ?></h4>
		<h4> Maximum Memory : <?php echo $row['Max_Memory']; ?></h4>
		<h4> Memory Slots : <?php echo $row['Memory_Slots']; ?></h4>
		<h4> WIFI : <?php echo $row['WIFI']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
	$i++;
	}
?>
