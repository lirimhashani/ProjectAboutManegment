
					<?php
            $result = mysqli_query($conn, "SELECT * FROM umvlo_tedhenat WHERE PamjaFaqes='MenyAdm'");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			
			  	 echo $Pershkrimi;
			  
if($result==null)
  mysqli_free_result($result);

			}

            ?>
						
			