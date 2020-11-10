<?php include "cart.php" ?>
<style><?php>include_once 'basestyle.css' ?> </style>
<link rel="stylesheet" href="php_table.css" type="text/css">

<script type="text/javascript" >
	var x = 0;
	document.getElementById('output').innerHTML = x;
	function add(){
		 document.getElementById('output').innerHTML = ++x;
		}
</script>

<div class ="div">
    <img src="whiteLogoalt.png" alt="BattleCat Logo" onclick=window.location="index.html" </img>
	Get a Great Deal on Microsoft Software 
	<a class="a" href="cart.php">Cart(<span id='output'></span>)</a>
</div>

<?php
include_once 'conn.php';

$sql = "SELECT * FROM Software"; 
$result = sqlsrv_query($conn,$sql);

	while($row = sqlsrv_fetch_array($result)){
?>
		<form  method="POST" action="Software.php?action=add&ID=<?php echo $row['ID']; ?>">
	    <div class="ItemData"><br>
		<h4> Item Number : <?php echo $row['ID']; ?></h4>
		<h4> Title : <?php echo $row['Title'] ?></h4>
		<h4> Software Type : <?php echo $row['Software_Type'] ?></h4>
		<h4> Mode : <?php echo $row['Mode'] ?></h4>
		<h4> Maximum Supported Memory : <?php echo $row['Maximum_Supported_Memory'] ?></h4>
		<h4> Price : <?php echo $row['Price'] = sprintf("%.02f",$row['Price']) ?></h4>
		<h4> Quantity : <?php echo $row['Quantity'] ?></h4>		
		<input type="hidden" name='Title' value="<?php echo $row['Title']; ?>"/>
		<input type="hidden" name='Price' value="<?php echo $row['Price']; ?>"/>
		<input type="hidden" name='quantity' value="1"/>
		<input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn_info" id="btn" onclick="add();" value="Add to Cart"></input>
		<br><br>
		</div>
		</form>
		<?php 
	}
?>