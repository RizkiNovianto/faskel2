<?php
// auto-generated by sfPropelAdmin
// date: 2014/11/12 08:43:50
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<?php 

$crit = new Criteria();

?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pengguna
                            <small>Profil</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="home">Beranda</a>
                            </li>
                            <li>
                                <a href="/faskel_symfony/web/main_dev.php/pengguna/detail">Profil</a>
                            </li>
                            <li class="active">
                                Profil
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-11">
                <fieldset class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h3 style="font-size:18px"><?php echo __('Profil Pengguna') ?></h3> 
                        </div>
                    </div>
                    
                    <?php if ($pengguna != null) {?>
                    <div class="col-lg-12">
                        <div class="row">
                        <div class="col-lg-2 text-right" style="font-weight: bold">
                                <div class="panel-body">
                                    Username
                                </div>
                        </div>
                        <div class="col-lg-10 text-left text-justify" style="font-weight: bold">
                                <div class="panel-body">
                                   : <?php echo $pengguna->getSfGuardUser()?>
                                </div>
                        </div>
                        </div>
                        
                        <div class="row" style="background-color: #eef ">
                        <div class="col-lg-2 text-right" style="font-weight: bold">
                                <div class="panel-body">
                                    Nama
                                </div>
                        </div>
                        <div class="col-lg-10 text-left text-justify" style="font-weight: bold">
                                <div class="panel-body">
                                   : <?php echo  $pengguna->getNama()?>
                                </div>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-lg-2 text-right" style="font-weight: bold">
                                <div class="panel-body">
                                    Wilayah
                                </div>
                        </div>
                        <div class="col-lg-10 text-left text-justify" style="font-weight: bold">
                                <div class="panel-body">
                                   : <?php echo  $pengguna->getWilayah()?>
                                </div>
                        </div>
                        </div>
                        
                        <div class="row" style="background-color: #eef ">
                        <div class="col-lg-2 text-right" style="font-weight: bold">
                                <div class="panel-body">
                                    Keterangan
                                </div>
                        </div>
                        <div class="col-lg-10 text-left text-justify" style="font-weight: bold">
                                <div class="panel-body">
                                   : <?php echo  $pengguna->getKeterangan()?>
                                </div>
                        </div>
                        </div>
                                                
                    </div>
                    <?php }; 
                    if ($pengguna == null) { ?>
                        <div class="row">
                        <div class="col-lg-12 text-center" style="font-weight: bold">
                                <div class="panel-body">
                                    <?php echo 'Silakan mengisi data profil anda'?>
                                </div>
                        </div>
                        </div>
                    <?php };?>
                    

                </fieldset>
                </div>
                
            </div>
            <!-- /.container-fluid -->      
                        
            <div id="sf_admin_container">
                <div id="sf_admin_content">
                    <ul class="sf_admin_actions">
                            <li><?php echo button_to(__('Isi Profil'), 'pengguna/create' , array (
                            'class' => 'sf_admin_action_list',
                        )) ?></li>
                    </ul>
                </div>
            </div>
            
        </div>