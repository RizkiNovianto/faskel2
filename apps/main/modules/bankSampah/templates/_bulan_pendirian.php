<?php 

for($x=1; $x<=12; $x++)
{
    $arNum[] = $x;
}

echo select_tag('bank_sampah[bulan_pendirian]',
        options_for_select(array('1' => 'Januari'
        , '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni'
        , '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November'
	, '12' => 'Desember')
                , $bank_sampah->getBulanPendirian(),
                'include_blank = true'
                )) 
?>