<link rel = "stylesheet" href="basestyle.css" type="text/css">
<link rel="stylesheet" href="php_table.css" type="text/css">

<div class ="div" >
<a><img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html"></a>
Get a Great Deal on Keyboards
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Keyboard;";
$result = sqlsrv_query($conn,$sql);
$i=1;
	
	while($row = sqlsrv_fetch_array($result,2)){
?>		
		<div class="ItemData" id="<?php echo $i ?>" >
		<br><h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Manufacturer : <?php echo $row['Manufacturer']; ?></h4>
		<h4> Style : <?php echo $row['Style']; ?></h4>
		<h4> Switch Type : <?php echo $row['Switch_Type']; ?></h4>
		<h4> Backlit : <?php echo $row['Backlit']; ?></h4>
		<h4> Tenkeyless : <?php echo $row['Tenkeyless']; ?></h4>
		<h4> Connection Type : <?php echo $row['Connection_Type']; ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("$%.02f",$row['Price']); ?></h4>
	    <h4> Quantity : <?php echo $row['Quantity']; ?></h4>
		<br><br></div>
<?php
	$i++;
	}
?>
