<?php 
/*if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) {
if ($kader->getStatus() == 0) echo link_to('<div style="color:red">Non-Aktif</div>', 'kader/aktivasi?id='.$kader->getId()); 
if ($kader->getStatus() == 1) echo link_to('<div style="color:blue">Aktif</div>', 'kader/aktivasi?id='.$kader->getId()); 
}*/

//else{
	if ($kader->getStatus() == 0) echo '<div style="color:red">Non-Aktif</div>'; 
	if ($kader->getStatus() == 1) echo '<div style="color:blue">Aktif</div>'; 
//}
?>