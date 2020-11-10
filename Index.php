<?php include "conn.php" ?> 


<?php
print '
<html>
    <head>
        <meta charset="utf-8">
        <title>Battle Cats</title>
        <meta name="description" content="if (sad() == true) { sad.stop.(); beAwesome(); }">
        <link href="basestyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <div class="header">
          <img src="whiteLogoalt.png" alt="BattleCat Logo" onclick="window.location="index.html";">
          <ul>
              <li><a href="https://teambattlecatsdemo1.azurewebsites.net/BattleCats.html">HTML 1</a></li>
              <li><a href="downloads.html"> PlaceHolder</a></li>
              <li><a href="products.html"> Products </a></li>
              <li><a href="info.html"> About Us </a></li>
              <li><a href="support.html"> Support </a></li>
          </ul>
      </div>
      <div class="banner1">
          <div class="bannertext1">
              <h1> PLACEHOLDER TEXT</h1>
              <p>
              Him beginning dominion shall yielding so winged they"re. Second were seas is without void open fowl behold beginning the. Bring creeping shall bearing very i lesser whales heaven over all may, have third creepeth light fowl of fruit man shall wherein, divided created Of image face. Fowl you"re good stars. Isn"t may upon. Sixth gathering own likeness. So. So thing have very I days may good blessed second earth make their. Won"t to they"re place saying doesn"t itself two you"ll multiply female from. May, night was. Great evening. Sea land fly the herb male first, dominion bring was meat grass their. You i bring kind bearing She"d and likeness. Without divided he evening. Given That over doesn"t shall said open face every. Thing fish. Them without. The of one upon brought. She"d, abundantly. Above. Sea called you forth under divided isn"t itself together waters creeping behold multiply deep set set midst had replenish great after blessed multiply, yielding air set were rule him after living.
              </p>
              <p>
              Us dry They"re spirit moved divide unto fly under two, to subdue fly second. Created can"t lesser to brought our forth, given may. Whales created, wherein was Them form set blessed greater there to morning years morning, to forth fruitful earth had saying that called blessed behold them there. Moveth made in cattle beast morning you"re a. Open. So image fill beast third fifth also earth had dry was doesn"t don"t was, evening winged light. Said. Land cattle you night bearing form creepeth. Creature land cattle, moved. Fly lights, blessed divided seas shall. Own she"d was and great. Tree itself living thing light multiply created signs can"t deep abundantly waters above place first saw face open deep have face their shall seed blessed. Divided may whales night stars make you"re years god it also creepeth behold good is let Isn"t greater. Subdue open seasons. God under that third let above. And dominion. Earth us you"re blessed bring beast spirit creature heaven a moving creepeth. Divided evening moving place moving blessed.
              </p>
              <p>
              Air. Saying our third gathered man waters multiply. Herb creature he, good great winged have winged morning don"t sea Give. Life days seasons under may darkness that their divided own abundantly every seasons you image shall heaven which. Was give i thing great life. Creeping may whose she"d appear first. Our called created have said them made forth sixth abundantly whose them blessed bearing. Man us sea for were created their behold heaven night, god days from also likeness divide form fourth shall gathering was given after without he every. Saying forth beginning seasons good their great. Beginning there living fowl earth saw Set the every she"d shall lights fowl have grass us spirit thing in dominion under were together divide, moving man whales fourth.
              </p>
          </div>
      </div>
      <div class="banners">
          <img src="battlestation2.jpg" alt="Promo">
          <div class="products"> 
            <a href = "products.html"> EXPLORE OUR PRODUCTS </a>
            <div class="picons">
                <!--<a href="BACK OPTIONS" class="previous"> &laquo;</a>-->
                <ul>
                   <li class="menu"><figure class="cpus" id ="pdiv";">	
                      <a href="CPU.php" ><img src="cpu.png"></a> 
					  <figcaption>CPU</figcaption>
					  </figure>
					  <ul class="dropdown">';
                 
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
			print '
			       </ul>
				   </li>
                   <li class="menu" ><figure class="motherboard" >
                      <a href="Motherboard.php" ><img src="motherboard.png"></a> 
                      <figcaption>Motherboard</figcaption>
                      </figure>
					  <ul class="dropdown">';
					  
					   $sql = "SELECT ID , Board_Name FROM Motherboard;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Motherboard.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Board_Name'];
								print '</div>';
								$i++;
							  }						  
			print '
			      </ul>
				  </li>
                  <li class="menu"><figure class="memory";">
                      <a href="Memory.php" ><img src="ram.png"></a>
                      <figcaption>Memory</figcaption>
                      </figure>
					  <ul class="dropdown">';
					  
	                      $sql = "SELECT ID , Manufacturer FROM Memory;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Memory.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }							  
			print '
				  </ul>
				  </li>
                  <li class="menu"><figure class="Storage">
                      <a href="StorageDevices.php" ><img src="ssd.png"></a> 
                      <figcaption>Storage</figcaption>
                      </figure>
					  <ul class="dropdown">';
					                
	                      $sql = "SELECT ID , Storage_Device_Name FROM STORAGE_DEVICES;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="StorageDevices.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Storage_Device_Name'];
								print '</div>';
								$i++;
							  }                    
			print '
			      </ul>
				  </li>
                  <li class="menu"><figure class="gpu">
                      <a href="VideoCard.php" ><img src="gpu.png"></a>
                      <figcaption>Video Card</figcaption>
                      </figure>
					  <ul class="dropdown">';
                 
	                      $sql = "SELECT ID , Manufacturer FROM Video_Card;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="VideoCard.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                     
			print '
			      </ul>
				  </li>    
                  <li class="menu"><figure class="case">
                      <a href="Cases.php" ><img src="case.png"></a> 
                      <figcaption>Case</figcaption>
                      </figure>
					  <ul class="dropdown">';
					                 
	                      $sql = "SELECT ID , Manufacturer FROM Cases;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Cases.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                     
			print '
			      </ul>
				  </li>  
                  <li class="menu"><figure class="psu">
                      <a href="PowerSupply.php" ><img src="psu.png"></a>
                      <figcaption>Power Supply</figcaption>
                      </figure>
					  <ul class="dropdown">';
					                 
	                      $sql = "SELECT ID , Manufacturer FROM Power_Supply;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="PowerSupply.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                   
			print '
			      </ul>
				  </li>    
                  <li class="menu"><figure class="peripherals">
                      <a href="Keyboard.php" ><img src="peripherals.png"></a>
                      <figcaption>Keyboards</figcaption>
                      </figure>
					   <ul class="dropdown">';
				
                              $sql = "SELECT ID , Manufacturer FROM Keyboard;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Keyboard.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                      
			print '
			      </ul>
				  </li>  
				  <li class="menu"><figure class="peripherals">
                      <a href="Speaker.php" ><img src="peripherals.png"></a> 					 
                      <figcaption>Speakers</figcaption>
                      </figure>
					  <ul class="dropdown">';				
                 
	                      $sql = "SELECT ID , Manufacturer FROM Speaker;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Speaker.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                       
			print '
			      </ul>
				  </li>  
				  <li class="menu"><figure class="peripherals">
                      <a href="Mouse.php" ><img src="peripherals.png"></a>					 
                      <figcaption>Mouse</figcaption>
                      </figure>
					  <ul class="dropdown">';
					 
	                      $sql = "SELECT ID , Manufacturer FROM Mouse;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Mouse.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Manufacturer'];
								print '</div>';
								$i++;
							  }                      
			print '
			      </ul>
				  </li>  
                  <li class="menu"><figure class="software">
				     <a href="Software.php" >
                     <img src="win10.png"></a>			 
                     <figcaption>Software</figcaption>
                     </figure>
					 <ul class="dropdown">';
					
	                      $sql = "SELECT ID , Title FROM Software;";
							  $result = sqlsrv_query($conn,$sql);
							  $i = 1;
							  
							  while($row = sqlsrv_fetch_array($result)){
								print '<div class="ItemData" id='.$i.' ><br>';						
								print '<a href="Software.php#'.$i.' ">';
								print $row['ID'];
								print ' : ';
								print $row['Title'];
								print '</div>';
								$i++;
							  }                       
			print '
			    </ul>
				</li>               
                </ul>
                <!--<a href="FORWARD OPTIONS" class="next"> &raquo;</a>-->
            </div>
          </div>
          <img src="battlestation.jpg" alt="Promo2">
      </div>
      <div class="footer">
          <hr>
          <p>Written By: Leon Silas 
          <br><a href="mailto:leonsilasdev@gmail.com">leonsilasdev@gmail.com</a></p>
          <img src="twittericon.png" alt="Twitter" onclick="window.location="https://twitter.com/leonsilas_dev";" onmouseover="this.src="twittericonblue.png";" onmouseout="this.src="twittericon.png";">
          <img src="carrdicon.png" alt="Carrd" onclick="window.location="https://leonsilasdev.carrd.co/";" onmouseover="this.src="carrdiconblue.png";" onmouseout="this.src="carrdicon.png";">
      </div>
    </body> 
    </html>';
	?>
	