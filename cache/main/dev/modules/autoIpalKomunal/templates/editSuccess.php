<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/07 04:21:05
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Form Pengisian Data IPAL Komunal', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('ipalKomunal/edit_header', array('ipal_komunal' => $ipal_komunal)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('ipalKomunal/edit_messages', array('ipal_komunal' => $ipal_komunal, 'labels' => $labels)) ?>
<?php include_partial('ipalKomunal/edit_form', array('ipal_komunal' => $ipal_komunal, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('ipalKomunal/edit_footer', array('ipal_komunal' => $ipal_komunal)) ?>
</div>

</div>
