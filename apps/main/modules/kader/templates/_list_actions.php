<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/23 09:48:09
?>
<ul class="sf_admin_actions">
    <li><?php echo button_to(__('Reset Pengurutan'), 'kader/list?sort=id&type=asc', array (
  'class' => 'sf_admin_action_reset_filter',
)) ?></li>
    <li><?php echo button_to(__('Urut Wilayah'), 'kader/list?sort=id_wilayah&type=asc', array (
  'class' => 'sf_admin_action_list',
)) ?></li>
    <li><?php echo button_to(__('Simpan Excel'), 'kader/ExcelGenerate', array (
  'class' => 'sf_admin_action_excel',
)) ?></li>
  <li><?php echo button_to(__('Tambah Data'), 'kader/create', array (
  'class' => 'sf_admin_action_create',
)) ?></li>
</ul>
