<?php 

echo select_tag('kader[status]',
        options_for_select(array('0' => 'Non-Aktif'
        , '1' => 'Aktif')
                , $kader->getStatus(),
                'include_blank = true'
                )) 

        
?>