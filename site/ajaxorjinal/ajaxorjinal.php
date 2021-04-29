 <?php 
   
   sleep(1);
   
   
   require("ayar.php"); 
    
	 
	
     if(!empty($_POST["id"])){
		 
		 
		 $id = $_POST["id"]; 
		 
		 $query = $db->query("select count(*) as say from urunler where id < ".$id." order by id desc"); 
		 
		 $row = $query->fetch();
		 
		 $toplam = $row["say"];
		 
		 $limit = 2;  
		 
		
		 $query = $db->query("select * from urunler where id < ".$id." order by id desc limit $limit");
		 
		  foreach($query as $row) {
			   
			   $id = $row["id"];
			   
			   ?>
			    <div class="item"><?php echo $row["urunadi"];?></div>
			   <?php
			  
		  } 
		  
		  if($toplam > $limit){
			  
			    ?>
		<div class="menu" id="menu_<?php echo $id;?>"> 
		<span class="show_more" id="<?php echo $id;?>">Daha fazlasını goster</span>
		<span class="loading" style="display:none;">Yukleniyor...</span>
		</div>
		  <?php
			  
		  }else {
			  
			  echo '<span class="bitti">daha fazla konu bulunmuyor</span>';
			  
		  }
		 
	 }
 
 
 
 ?>