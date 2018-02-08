<?php 

echo select_tag('bank_sampah[status]',
        options_for_select(array('0' => 'Non-Aktif'
        , '1' => 'Aktif')
                , $bank_sampah->getStatus(),
                'include_blank = true'
                )) 

        
?>