<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/06 03:23:48
?>
<td colspan="5">
    <?php echo link_to($sf_guard_user->getUsername() ? $sf_guard_user->getUsername() : __('-'), 'sfGuardUser/edit?id='.$sf_guard_user->getId()) ?>
     - 
    <?php echo ($sf_guard_user->getCreatedAt() !== null && $sf_guard_user->getCreatedAt() !== '') ? format_date($sf_guard_user->getCreatedAt(), "f") : '' ?>
     - 
    <?php echo ($sf_guard_user->getLastLogin() !== null && $sf_guard_user->getLastLogin() !== '') ? format_date($sf_guard_user->getLastLogin(), "f") : '' ?>
     - 
    <?php echo get_partial('profil', array('type' => 'list', 'sf_guard_user' => $sf_guard_user)) ?>
     - 
    <?php echo get_partial('opsi', array('type' => 'list', 'sf_guard_user' => $sf_guard_user)) ?>
     - 
</td>