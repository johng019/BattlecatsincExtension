
<?php

session_start();
$product_ids = array();
//session_destroy();

if(filter_input(INPUT_POST, 'add_to_cart')){
	if(isset($_SESSION['shopping_cart'])){
		$count = count($_SESSION['shopping_cart']);
		$product_ids = array_column($_SESSION['shopping_cart'],'ID');
		
		if(!in_array(filter_input(INPUT_GET,'ID'),$product_ids)){
		$_SESSION['shopping_cart'][$count] = array
			(
			   'ID' => filter_input(INPUT_GET,'ID'),
			   'Title' => filter_input(INPUT_POST,'Title'),
			   'Price' => filter_input(INPUT_POST, 'Price'),
			   'quantity' => filter_input(INPUT_POST,'quantity')
			);
		}
		else{
			for($i = 0; $i < count($product_ids); $i++){
				if($product_ids[$i] == filter_input(INPUT_GET,'ID')){
					$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');	
				}
			}
		}
	}
	else{
		$_SESSION['shopping_cart'][0] = array
		(
		   'ID' => filter_input(INPUT_GET,'ID'),
		   'Title' => filter_input(INPUT_POST,'Title'),
		   'Price' => filter_input(INPUT_POST, 'Price'),
		   'quantity' => filter_input(INPUT_POST,'quantity',0)
		);
	}
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
			foreach($_SESSION['shopping_cart'] as $key => $product){
				if($product['ID'] == filter_input(INPUT_GET,'ID')){
					unset($_SESSION['shopping_cart'][$key]);
				}
			}
			$_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
		}
//pre_r($_SESSION);

function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>
<div class="all">
	<link rel="stylesheet" href="cart.css" type="text/css"></link>
	<div>
	<a href="Software.php"><img id="img" src="whiteLogoalt.png" alt="BattleCat Logo" onclick="window.location="index.html"></img></a>
	</div>
	<table align "center" class="table">
		<tr><th colspan="5"><h3>Order Details</h3></th></tr>
		<tr >
			<th width="40%">Product </th>
			<th width="10%">Quantity </th>
			<th width="20%">Price </th>
			<th width="15%">Total </th>
			<th width="5%">Action </th>
		</tr>
		<?php 
			if(!empty($_SESSION['shopping_cart'])):
				$total = 0;
				foreach($_SESSION['shopping_cart'] as $key => $product):
		?>		
		<tr class="rows" id="rows">
			<td ><?php echo $product['Title']; ?> </td>
			<td ><?php echo $product['quantity']; ?></td>
			<td ><?php echo $product['Price']; ?></td>
			<td><?php echo number_format($product['quantity'] * $product['Price'],2);?></td>
			<td>
				<a href="cart.php?action=delete&ID=<?php echo $product['ID'] ?>" >
				<button class="btn"> Remove</button></a>
			</td>
		</tr>
		<?php 
		
			$total = $total + ($product['quantity'] * $product['Price']);
			endforeach;
		?>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td colspan="3" align="right">Total</td>
			<td align="center">$ <?php echo number_format($total,2); ?></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="5">
			<?php 
				if(isset($_SESSION['shopping_cart'])):
				if(count($_SESSION['shopping_cart']) > 0):
				?>
					<a href="payments.php" >Checkout</a>
				<?php 
					endif;endif; 
				?>
			</td>
		</tr>
		<?php
			endif;
		?>
	</table>
</div>