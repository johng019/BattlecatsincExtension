<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on CPUs
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM CPU;";
$result = sqlsrv_query($conn,$sql);
$i=1;
	
	while($row = sqlsrv_fetch_array($result,2)){
?>
		<div class="ItemData" id="<?php echo $i ?>"><br>
		<h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Processor : <?php echo $row['Processor']; ?></h4>
		<h4> Number of Cores : <?php echo $row['Core_Count']; ?></h4>
		<h4> Core Clock : <?php echo $row['Core_Clock']; ?></h4>
		<h4> Boost Clock : <?php echo $row['Boost_Clock']; ?></h4>
		<h4> TDP : <?php echo $row['TDP']; ?></h4>
		<h4> Integrated Graphics : <?php echo $row['Integrated_Graphics']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
	$i++;
	}
?>
