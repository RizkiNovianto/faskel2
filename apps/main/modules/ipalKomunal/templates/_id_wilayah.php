<?php $user = $sf_user->getGuardUser();?>
<?php 

$cri = new Criteria();
$cri2 = new Criteria();

if($user->getIsSuperAdmin() != '1') {
$cri->add(PenggunaPeer::ID_SFGUARDUSER, $user->getId());
$pengguna = PenggunaPeer::doSelect($cri);
$cri2->add(WilayahPeer::ID, $pengguna[0]->getIdWilayah());
}
$wilayah = WilayahPeer::doSelect($cri2);

echo select_tag('ipal_komunal[id_wilayah]', objects_for_select(
  $wilayah,
  'getId',
  '__toString',
  $ipal_komunal->getIdWilayah()
  ));
        
?>

