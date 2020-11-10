<script type="text/javascript" >
var x = 0;
document.getElementById('output').innerHTML = x;
function add(){
	 document.getElementById('output').innerHTML = ++x;
	}
</script>
<a class="a" href="cart.php">Cart(<span id='output'></span>)</a>
<input type="submit" name="add_to_cart" style="margin-top:10px;" class="btn_info" id="btn" onclick="add()" value="Add to Cart"></input>

