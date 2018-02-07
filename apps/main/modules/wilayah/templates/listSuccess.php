<?php
// auto-generated by sfPropelAdmin
// date: 2014/11/12 08:43:50
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Wilayah
                            <small>Daftar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.html">Beranda</a>
                            </li>
                            <li>
                                <a href="/faskel_symfony/web/main_dev.php/wilayah">Wilayah</a>
                            </li>
                            <li class="active">
                                Daftar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->


                <div id="sf_admin_container">

                <h1><?php echo __('<i class="fa fa-fw fa-bank"></i> Daftar Wilayah <i class="fa fa-fw fa-bank"></i>', 
                array()) ?></h1>

                <div id="sf_admin_header">
                <?php include_partial('wilayah/list_header', array('pager' => $pager)) ?>
                <?php include_partial('wilayah/list_messages', array('pager' => $pager)) ?>
                </div>

                <div id="sf_admin_bar">
                </div>

                <div id="sf_admin_content">
                <?php if (!$pager->getNbResults()): ?>
                <?php echo __('no result') ?>
                <?php else: ?>
                <?php include_partial('wilayah/list', array('pager' => $pager)) ?>
                <?php endif; ?>
                <?php include_partial('list_actions') ?>
                </div>

                <div id="sf_admin_footer">
                <?php include_partial('wilayah/list_footer', array('pager' => $pager)) ?>
                </div>
                </div>
            </div>
        <!-- /#page-wrapper -->
        