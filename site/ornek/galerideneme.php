<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="genel" style="width:700px;margin:auto;">
	<?php 
	
	 require("ayar.php"); 
	 $query = $db->query("select * from urunler order by id desc limit 2"); 
	  
	   foreach($query as $row) {   
		    $id = $row["id"];	
		   ?>
		   <div class="item"><?php echo $row["urunadi"];?></div>
		   <?php   
	   }
	   
	   ?>
	   <div class="menu" id="menu_<?php echo $id;?>"> 
	    <span class="show_more" id="<?php echo $id;?>">Daha fazlasını goster</span>
	    <span class="loading" style="display:none;">Yukleniyor...</span>
	   </div>
	   </div>
	   <?php

	?>
	
	 <script type="text/javascript" src="custom.js"></script>
</body>
</html>




