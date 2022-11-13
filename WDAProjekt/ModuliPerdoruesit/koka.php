

				<?php
            $result = mysqli_query($conn, "SELECT * FROM umvlo_tedhenat WHERE PamjaFaqes='Koka'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>

			   <?php echo $Titulli ?>
			<h1><?php echo $Pershkrimi ?></h1>
					
					
        	
			
		<?php } ?>