<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/07 04:47:13
?>
    <td><?php echo $kader->getNama() ?></td>
      <td><?php echo $kader->getAlamat() ?></td>
      <td><?php echo $kader->getJenisKader() ?></td>
      <td><?php echo $kader->getWilayah() ?></td>
      <td><?php echo $kader->getRt() ?></td>
      <td><?php echo $kader->getRw() ?></td>
      <td><?php echo $kader->getNoTelp() ?></td>
      <td><?php echo get_partial('valid_view', array('type' => 'list', 'kader' => $kader)) ?></td>
      <td><?php echo get_partial('status_view', array('type' => 'list', 'kader' => $kader)) ?></td>
      <td><?php echo $kader->getKeterangan() ?></td>
      <td><?php echo get_partial('opsi', array('type' => 'list', 'kader' => $kader)) ?></td>
  