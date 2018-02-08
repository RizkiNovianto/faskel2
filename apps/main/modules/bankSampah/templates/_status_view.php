<?php 

	if ($bank_sampah->getStatus() == 0) echo '<div style="color:red">Non-Aktif</div>'; 
	if ($bank_sampah->getStatus() == 1) echo '<div style="color:blue">Aktif</div>'; 

?>