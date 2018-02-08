<?php 

echo select_tag('ipal_komunal[status]',
        options_for_select(array('0' => 'Non-Aktif'
        , '1' => 'Aktif')
                , $ipal_komunal->getStatus(),
                'include_blank = true'
                )) 

        
?>