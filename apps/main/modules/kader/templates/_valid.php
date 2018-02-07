<?php 

if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) {
if ($kader->getValid() == 0) echo link_to('<div style="color:red">Tidak</div>', 'kader/validasi?id='.$kader->getId()); 
if ($kader->getValid() == 1) echo link_to('<div style="color:blue">Ya</div>', 'kader/validasi?id='.$kader->getId()); 
}

else {
	if ($kader->getValid() == 0) echo '<div style="color:red">Tidak</div>'; 
	if ($kader->getValid() == 1) echo '<div style="color:blue">Ya</div>'; 
}
?>