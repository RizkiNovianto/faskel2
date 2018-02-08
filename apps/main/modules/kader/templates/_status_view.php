<?php 

	if ($kader->getStatus() == 0) echo '<div style="color:red">Non-Aktif</div>'; 
	if ($kader->getStatus() == 1) echo '<div style="color:blue">Aktif</div>'; 

?>