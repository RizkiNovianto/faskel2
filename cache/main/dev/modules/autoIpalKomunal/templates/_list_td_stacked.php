<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/07 04:21:07
?>
<td colspan="10">
    <?php echo $ipal_komunal->getWilayah() ?>
     - 
    <?php echo $ipal_komunal->getNama() ?>
     - 
    <?php echo $ipal_komunal->getAlamat() ?>
     - 
    <?php echo $ipal_komunal->getDasarPembangunan() ?>
     - 
    <?php echo get_partial('date', array('type' => 'list', 'ipal_komunal' => $ipal_komunal)) ?>
     - 
    <?php echo $ipal_komunal->getPengelola() ?>
     - 
    <?php echo $ipal_komunal->getKondisi() ?>
     - 
    <?php echo get_partial('status_view', array('type' => 'list', 'ipal_komunal' => $ipal_komunal)) ?>
     - 
    <?php echo $ipal_komunal->getKeterangan() ?>
     - 
    <?php echo get_partial('opsi', array('type' => 'list', 'ipal_komunal' => $ipal_komunal)) ?>
     - 
</td>