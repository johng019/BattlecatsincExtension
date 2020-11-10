<table align "center" >
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
    <tr>
	    <td ><?php echo $product['Title']; ?> </td>
		<td ><?php echo $product['quantity']; ?></td>
        <td ><?php echo $product['Price']; ?></td>
        <td><?php echo number_format($product['quantity'] * $product['Price'], 2);?></td>
	    <td>
		    <a href="Software.php?action=delete&ID=<?php echo $product['ID'] ?>" >
			<button> Remove</button></a>
		</td>
	</tr>
	<?php 
	
	    $total = $total + ($product['quantity'] * $product['Price']);
		endforeach;
	?>
	<tr>
	    <td colspan="3" align "center">Total</td>
		<td align="center">$ <?php echo number_format($total,2); ?></td>
		<td></td>
	</tr>
	<tr>
	    <td colspan="5">
		<?php 
		    if(isset($_SESSION['shopping_cart'])):
			if(count($_SESSION['shopping_cart']) > 0):
			?>
			    <a href="#" >Checkout</a>
			<?php 
			    endif;endif; 
			?>
		</td>
	</tr>
	<?php
	    endif;
	?>
	</table>
		    