<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/24 02:01:16
?>
<ul class="sf_admin_actions">
    <li><?php echo button_to(__('Reset Pengurutan'), 'bankSampah/list?sort=id&type=asc', array (
  'class' => 'sf_admin_action_reset_filter',
)) ?></li>
    <li><?php echo button_to(__('Urut Wilayah'), 'bankSampah/list?sort=id_wilayah&type=asc', array (
  'class' => 'sf_admin_action_list',
)) ?></li>
    <li><?php echo button_to(__('Simpan Excel'), 'bankSampah/ExcelGenerate', array (
  'class' => 'sf_admin_action_excel',
)) ?></li>
      <li><?php echo button_to(__('Tambah Data'), 'bankSampah/create', array (
  'class' => 'sf_admin_action_create',
)) ?></li>
  </ul>
