 <?php include "conn.php" ?> 
 
 <ul class="dropdown">
					  <?php
	                      $sql = "SELECT ID , Processor FROM CPU;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="CPU.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Processor'];
								print '</div>';
								$i++;
							  }
							 
                       ?>
					  </ul>
	<!--for future use-->
	<!--Dropdown.html				  
	 <ul class="dropdown" >
				          <a href="CPU.php#1">1001:AMD RYZEN 3 3100</a><br>
						  <a href="CPU.php#2">1002:AMD RYZEN 3 3200G</a><br>
						  <a href="CPU.php#3">1003:AMD RYZEN 3 3300X</a><br>
						  <a href="CPU.php#4">1004:AMD RYZEN 5 3400G</a><br>
						  <a href="CPU.php#5">1005:AMD RYZEN 5 3600</a><br>
						  <a href="CPU.php#6">1006:AMD RYZEN 5 3600X</a><br>
						  <a href="CPU.php#7">1007:AMD RYZEN 5 3600XT</a><br>
						  <a href="CPU.php#8">1008:AMD RYZEN 7 3700X</a><br>
						  <a href="CPU.php#9">1009:AMD RYZEN 7 3800X</a><br>
						  <a href="CPU.php#10">1010:AMD RYZEN 7 3800XT</a><br>
						  <a href="CPU.php#11">1011:AMD RYZEN 9 3900X</a><br>
						  <a href="CPU.php#12">1012:AMD RYZEN 9 3900XT</a><br>
						  <a href="CPU.php#13">1013:AMD RYZEN 9 3950X</a><br>
						  <a href="CPU.php#14">1014:INTEL CORE i3-9100F</a><br>
						  <a href="CPU.php#15">1015:INTEL CORE i5-9600</a><br>
						  <a href="CPU.php#16">1016:INTEL CORE i7-9700F</a><br>
						  <a href="CPU.php#17">1017:INTEL CORE i9-9900</a><br>
						  <a href="CPU.php#18">1018:INTEL CORE i9-9900KS</a><br>
						  <a href="CPU.php#19">1019:INTEL CORE i3-10100</a><br>
						  <a href="CPU.php#20">1020:INTEL CORE i5-10600K</a><br>
						  <a href="CPU.php#21">1021:INTEL CORE i7-10700K</a><br>
						  <a href="CPU.php#22">1022:INTEL CORE i9-10900K</a></li>
                 	  </ul>		
-->					  