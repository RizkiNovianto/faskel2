<?php 
if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) {
    echo select_tag('kader[valid]',
        options_for_select(array('0' => 'Tidak'
        , '1' => 'Ya')
                , $kader->getValid(),
                'include_blank = true'
                ));
}

        
?>