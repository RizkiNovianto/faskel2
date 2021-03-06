<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/19 02:36:13
?>
<table cellspacing="0" class="sf_admin_list">
<thead>
<tr>
<th>No.</th>
<?php include_partial('list_th_tabular') ?>
</tr>
</thead>
<tfoot>
<tr><th colspan="12">
<div class="float-right">
<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/first.png', array('align' => 'absmiddle', 'alt' => __('First'), 'title' => __('First'))), 'kader/list?page=1') ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/previous.png', array('align' => 'absmiddle', 'alt' => __('Previous'), 'title' => __('Previous'))), 'kader/list?page='.$pager->getPreviousPage()) ?>

  <?php foreach ($pager->getLinks() as $page): ?>
    <?php echo link_to_unless($page == $pager->getPage(), $page, 'kader/list?page='.$page) ?>
  <?php endforeach; ?>

  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/next.png', array('align' => 'absmiddle', 'alt' => __('Next'), 'title' => __('Next'))), 'kader/list?page='.$pager->getNextPage()) ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/last.png', array('align' => 'absmiddle', 'alt' => __('Last'), 'title' => __('Last'))), 'kader/list?page='.$pager->getLastPage()) ?>
<?php endif; ?>
</div>
<?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% Hasil Ditemukan', array('%1%' => $pager->getNbResults()), $pager->getNbResults()) ?>
</th></tr>
</tfoot>
<tbody>
<?php $i = 1; foreach ($pager->getResults() as $kader): $odd = fmod(++$i, 2) ?>
<tr class="sf_admin_row_<?php echo $odd ?>">
<td><?php echo (($pager->getPage()-1)*20)+($i-1); ?></td>
<?php include_partial('list_td_tabular', array('kader' => $kader)) ?>
<?php include_partial('list_td_actions', array('kader' => $kader)) ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>
