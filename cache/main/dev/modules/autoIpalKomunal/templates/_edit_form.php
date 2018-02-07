<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/06 04:36:59
?>
<?php echo form_tag('ipalKomunal/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($ipal_komunal, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('ipal_komunal[id_wilayah]', __($labels['ipal_komunal{id_wilayah}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{id_wilayah}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{id_wilayah}')): ?>
    <?php echo form_error('ipal_komunal{id_wilayah}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('id_wilayah', array('type' => 'edit', 'ipal_komunal' => $ipal_komunal)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[nama]', __($labels['ipal_komunal{nama}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{nama}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{nama}')): ?>
    <?php echo form_error('ipal_komunal{nama}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getNama', array (
  'size' => 50,
  'control_name' => 'ipal_komunal[nama]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[alamat]', __($labels['ipal_komunal{alamat}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{alamat}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{alamat}')): ?>
    <?php echo form_error('ipal_komunal{alamat}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getAlamat', array (
  'size' => 50,
  'control_name' => 'ipal_komunal[alamat]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[dasar_pembangunan]', __($labels['ipal_komunal{dasar_pembangunan}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{dasar_pembangunan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{dasar_pembangunan}')): ?>
    <?php echo form_error('ipal_komunal{dasar_pembangunan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getDasarPembangunan', array (
  'size' => 25,
  'control_name' => 'ipal_komunal[dasar_pembangunan]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[tanggal_pembangunan]', __($labels['ipal_komunal{tanggal_pembangunan}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{tanggal_pembangunan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{tanggal_pembangunan}')): ?>
    <?php echo form_error('ipal_komunal{tanggal_pembangunan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('tanggal_pembangunan', array('type' => 'edit', 'ipal_komunal' => $ipal_komunal)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[bulan_pembangunan]', __($labels['ipal_komunal{bulan_pembangunan}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{bulan_pembangunan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{bulan_pembangunan}')): ?>
    <?php echo form_error('ipal_komunal{bulan_pembangunan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('bulan_pembangunan', array('type' => 'edit', 'ipal_komunal' => $ipal_komunal)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[tahun_pembangunan]', __($labels['ipal_komunal{tahun_pembangunan}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{tahun_pembangunan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{tahun_pembangunan}')): ?>
    <?php echo form_error('ipal_komunal{tahun_pembangunan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getTahunPembangunan', array (
  'size' => 7,
  'control_name' => 'ipal_komunal[tahun_pembangunan]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[pengelola]', __($labels['ipal_komunal{pengelola}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{pengelola}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{pengelola}')): ?>
    <?php echo form_error('ipal_komunal{pengelola}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getPengelola', array (
  'size' => 50,
  'control_name' => 'ipal_komunal[pengelola]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('ipal_komunal[kondisi]', __($labels['ipal_komunal{kondisi}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('ipal_komunal{kondisi}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('ipal_komunal{kondisi}')): ?>
    <?php echo form_error('ipal_komunal{kondisi}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($ipal_komunal, 'getKondisi', array (
  'size' => 25,
  'control_name' => 'ipal_komunal[kondisi]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('ipal_komunal' => $ipal_komunal)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($ipal_komunal->getId()): ?>
<?php echo button_to(__('delete'), 'ipalKomunal/delete?id='.$ipal_komunal->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
