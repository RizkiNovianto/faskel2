<?php

/**
 * bankSampah actions.
 *
 * @package    faskel_symfony
 * @subpackage bankSampah
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class bankSampahActions extends autobankSampahActions
{
    public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/bank_sampah/filters');
    
    $user = $this->getUser()->getGuardUser();
    
    $cri = new Criteria();
    $cri->add(PenggunaPeer::ID_SFGUARDUSER, $user->getId());
    $pengguna = PenggunaPeer::doSelect($cri);
    $wilayah_id = $pengguna[0]->getIdWilayah();

    // pager
    $this->pager = new sfPropelPager('BankSampah', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    
    if(!$this->getUser()->getGuardUser()->getIsSuperAdmin()) $c->add(BankSampahPeer::ID_WILAYAH, $wilayah_id);
    
    $c->add(BankSampahPeer::IS_DELETED, 0);
    
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', $this->getUser()->getAttribute('page', 1, 'sf_admin/bank_sampah')));
    $this->pager->init();
    // save page
    if ($this->getRequestParameter('page')) {
        $this->getUser()->setAttribute('page', $this->getRequestParameter('page'), 'sf_admin/bank_sampah');
    }
  }
  
  public function executeExcelGenerate()
  {      
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/bank_sampah/filters');

    // pager
    $this->pager = new sfPropelPager('BankSampah', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    
    $bs = BankSampahPeer::doSelect($c);
    
/*---------------------------------------*/    
    $filename = "website_data_" . date('Ymd') . ".xls";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    
    $arrayRow = array();
    
    $counter = 1;
    foreach ($bs as $baris)
    {
        if($baris->getBulanPendirian() == 1) $blnText = 'Januari';
        else if ($baris->getBulanPendirian() == 2) $blnText = 'Februari';
        else if ($baris->getBulanPendirian() == 3) $blnText = 'Maret';
        else if ($baris->getBulanPendirian() == 4) $blnText = 'April';
        else if ($baris->getBulanPendirian() == 5) $blnText = 'Mei';
        else if ($baris->getBulanPendirian() == 6) $blnText = 'Juni';
        else if ($baris->getBulanPendirian() == 7) $blnText = 'Juli';
        else if ($baris->getBulanPendirian() == 8) $blnText = 'Agustus';
        else if ($baris->getBulanPendirian() == 9) $blnText = 'September';
        else if ($baris->getBulanPendirian() == 10) $blnText = 'Oktober';
        else if ($baris->getBulanPendirian() == 11) $blnText = 'November';
        else if ($baris->getBulanPendirian() == 12) $blnText = 'Desember';
        
        $wilayahPart = explode(' - ', $baris->getWilayah());

        array_push($arrayRow, array(
            'No.' => $counter, 
            'Wilayah' => $wilayahPart[0],
            'Kecamatan' => $wilayahPart[1],
            'Kelurahan' => $wilayahPart[2],
            'Nama' => $baris->getNama(), 
            'Alamat' => $baris->getAlamat(),
            'Dasar Pendirian' => $baris->getDasarPendirian(),
            'Tanggal Pendirian' => $baris->getTanggalPendirian().' '.$blnText.' '.$baris->getTahunPendirian(),
            'SK' => $baris->getSk(), 
            'Jumlah Nasabah' => $baris->getJumlahNasabah(),
            'Omset' => $baris->getOmset())
                );
        $counter++;
    }
    
    $this->outputArray = $arrayRow;
    
    $flag = false;
    foreach($arrayRow as $row) {
      if(!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
      }
      echo implode("\t", array_values($row)) . "\r\n";
    }
  exit;
    
/*---------------------------------------*/    
    
  }
  
  public function executeDeleteFlag()
    {
        $id = $this->getRequestParameter('id');
        $this->bank_sampah = BankSampahPeer::retrieveByPK($id);
        $this->updateBankSampahFromRequest();
        if ($this->bank_sampah->getIsDeleted() == 0) $this->bank_sampah->setIsDeleted(1);
        else $this->bank_sampah->setIsDeleted(0);
        $this->saveBankSampah($this->bank_sampah);
        return $this->redirect('bankSampah/list');
    }

}
