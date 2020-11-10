<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Video Cards
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Video_Card;";
$result = sqlsrv_query($conn,$sql);

	while($row = sqlsrv_fetch_array($result,2)){	
?>
        <div class="ItemData" id='.$i.' ><br>
	    <h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4> Chipset : <?php echo $row['Chipset']; ?></h4>
		<h4> Memory : <?php echo $row['Memory']; ?></h4>
		<h4> Core Clock : <?php echo $row['Core_Clock']; ?></h4>
		<h4> Boost Clock : <?php echo $row['Boost_Clock']; ?></h4>
		<h4> Interface : <?php echo $row['Interface']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
		<h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br>
		</div>
<?php
		}
		
?>
