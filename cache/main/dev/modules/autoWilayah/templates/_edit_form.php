<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/07 03:59:05
?>
<?php echo form_tag('wilayah/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($wilayah, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('wilayah[wilayah]', __($labels['wilayah{wilayah}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('wilayah{wilayah}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('wilayah{wilayah}')): ?>
    <?php echo form_error('wilayah{wilayah}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('wilayah', array('type' => 'edit', 'wilayah' => $wilayah)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('wilayah[kecamatan]', __($labels['wilayah{kecamatan}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('wilayah{kecamatan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('wilayah{kecamatan}')): ?>
    <?php echo form_error('wilayah{kecamatan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($wilayah, 'getKecamatan', array (
  'size' => 25,
  'control_name' => 'wilayah[kecamatan]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('wilayah[kelurahan]', __($labels['wilayah{kelurahan}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('wilayah{kelurahan}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('wilayah{kelurahan}')): ?>
    <?php echo form_error('wilayah{kelurahan}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($wilayah, 'getKelurahan', array (
  'size' => 25,
  'control_name' => 'wilayah[kelurahan]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('wilayah' => $wilayah)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($wilayah->getId()): ?>
<?php echo button_to(__('delete'), 'wilayah/delete?id='.$wilayah->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
