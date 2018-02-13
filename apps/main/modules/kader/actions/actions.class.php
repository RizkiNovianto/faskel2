<?php

/**
 * kader actions.
 *
 * @package    faskel_symfony
 * @subpackage kader
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class kaderActions extends autokaderActions
{
    public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/kader/filters');
    
    $user = $this->getUser()->getGuardUser();
    
    $cri = new Criteria();
    $cri->add(PenggunaPeer::ID_SFGUARDUSER, $user->getId());
    $pengguna = PenggunaPeer::doSelect($cri);
    $wilayah_id = $pengguna[0]->getIdWilayah();


    // pager
    $this->pager = new sfPropelPager('Kader', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    
    if(!$this->getUser()->getGuardUser()->getIsSuperAdmin()) $c->add(KaderPeer::ID_WILAYAH, $wilayah_id);
    
    $c->add(KaderPeer::IS_DELETED, 0);
    
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', $this->getUser()->getAttribute('page', 1, 'sf_admin/kader')));
    $this->pager->init();
    // save page
    if ($this->getRequestParameter('page')) {
        $this->getUser()->setAttribute('page', $this->getRequestParameter('page'), 'sf_admin/kader');
    }
  }
  
    public function executeValidasi()
    {
        $id = $this->getRequestParameter('id');
        $this->kader = KaderPeer::retrieveByPK($id);
        $this->updateKaderFromRequest();
        if ($this->kader->getValid() == 0) $this->kader->setValid(1);
        else $this->kader->setValid(0);
        $this->saveKader($this->kader);
        return $this->redirect('kader/list');
    }
	
	public function executeAktivasi()
    {
        $id = $this->getRequestParameter('id');
        $this->kader = KaderPeer::retrieveByPK($id);
        $this->updateKaderFromRequest();
        if ($this->kader->getStatus() == 0) $this->kader->setStatus(1);
        else $this->kader->setStatus(0);
        $this->saveKader($this->kader);
        return $this->redirect('kader/list');
    }
    
   public function executeExcelGenerate()
  {      
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/kader/filters');

    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    
    $bs = KaderPeer::doSelect($c);
    
/*---------------------------------------*/    
    $filename = "website_data_" . date('Ymd') . ".xls";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    
    $arrayRow = array();
    
    $counter = 1;
    $blnText ='';
    
    
    foreach ($bs as $baris)
    {                
        $wilayahPart = explode(' - ', $baris->getWilayah());
        
        if($baris->getValid() == 0) $status = 'Belum Divalidasi';
        if($baris->getValid() == 1) $status = 'Sudah Divalidasi';

        array_push($arrayRow, array(
            'No.' => $counter, 
            'Wilayah' => $wilayahPart[0],
            'Kecamatan' => $wilayahPart[1],
            'Kelurahan' => $wilayahPart[2],
            'Nama' => $baris->getNama(), 
            'Alamat' => $baris->getAlamat(),
            'Jenis Kader' => $baris->getJenisKader(),
            'RT' => $baris->getRT(),            
            'RW' => $baris->getRW(), 
            'No. Telp' => '['.$baris->getNoTelp().']',
            'Status Validasi' => $status
                ));
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
        $this->kader = KaderPeer::retrieveByPK($id);
        $this->updateKaderFromRequest();
        if ($this->kader->getIsDeleted() == 0) $this->kader->setIsDeleted(1);
        else $this->kader->setIsDeleted(0);
        $this->saveKader($this->kader);
        return $this->redirect('kader/list');
    }

}
