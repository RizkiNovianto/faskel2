<?php 

//if ($ipal_komunal->getStatus() == 0) echo link_to('<div style="color:red">Non-Aktif</div>', 'ipalKomunal/statusChange?id='.$ipal_komunal->getId()); 
//if ($ipal_komunal->getStatus() == 1) echo link_to('<div style="color:blue">Aktif</div>', 'ipalKomunal/statusChange?id='.$ipal_komunal->getId()); 

	if ($ipal_komunal->getStatus() == 0) echo '<div style="color:red">Non-Aktif</div>'; 
	if ($ipal_komunal->getStatus() == 1) echo '<div style="color:blue">Aktif</div>'; 

?>