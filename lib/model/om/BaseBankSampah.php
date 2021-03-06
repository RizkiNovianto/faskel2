<?php


abstract class BaseBankSampah extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $id_wilayah;


	
	protected $nama;


	
	protected $alamat;


	
	protected $dasar_pendirian;


	
	protected $tanggal_pendirian;


	
	protected $bulan_pendirian;


	
	protected $tahun_pendirian;


	
	protected $sk;


	
	protected $ketua;


	
	protected $jumlah_nasabah;


	
	protected $omset;


	
	protected $status = 0;


	
	protected $keterangan;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $is_deleted = 0;

	
	protected $aWilayah;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIdWilayah()
	{

		return $this->id_wilayah;
	}

	
	public function getNama()
	{

		return $this->nama;
	}

	
	public function getAlamat()
	{

		return $this->alamat;
	}

	
	public function getDasarPendirian()
	{

		return $this->dasar_pendirian;
	}

	
	public function getTanggalPendirian()
	{

		return $this->tanggal_pendirian;
	}

	
	public function getBulanPendirian()
	{

		return $this->bulan_pendirian;
	}

	
	public function getTahunPendirian()
	{

		return $this->tahun_pendirian;
	}

	
	public function getSk()
	{

		return $this->sk;
	}

	
	public function getKetua()
	{

		return $this->ketua;
	}

	
	public function getJumlahNasabah()
	{

		return $this->jumlah_nasabah;
	}

	
	public function getOmset()
	{

		return $this->omset;
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getKeterangan()
	{

		return $this->keterangan;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getIsDeleted()
	{

		return $this->is_deleted;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = BankSampahPeer::ID;
		}

	} 
	
	public function setIdWilayah($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_wilayah !== $v) {
			$this->id_wilayah = $v;
			$this->modifiedColumns[] = BankSampahPeer::ID_WILAYAH;
		}

		if ($this->aWilayah !== null && $this->aWilayah->getId() !== $v) {
			$this->aWilayah = null;
		}

	} 
	
	public function setNama($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nama !== $v) {
			$this->nama = $v;
			$this->modifiedColumns[] = BankSampahPeer::NAMA;
		}

	} 
	
	public function setAlamat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->alamat !== $v) {
			$this->alamat = $v;
			$this->modifiedColumns[] = BankSampahPeer::ALAMAT;
		}

	} 
	
	public function setDasarPendirian($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dasar_pendirian !== $v) {
			$this->dasar_pendirian = $v;
			$this->modifiedColumns[] = BankSampahPeer::DASAR_PENDIRIAN;
		}

	} 
	
	public function setTanggalPendirian($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tanggal_pendirian !== $v) {
			$this->tanggal_pendirian = $v;
			$this->modifiedColumns[] = BankSampahPeer::TANGGAL_PENDIRIAN;
		}

	} 
	
	public function setBulanPendirian($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->bulan_pendirian !== $v) {
			$this->bulan_pendirian = $v;
			$this->modifiedColumns[] = BankSampahPeer::BULAN_PENDIRIAN;
		}

	} 
	
	public function setTahunPendirian($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tahun_pendirian !== $v) {
			$this->tahun_pendirian = $v;
			$this->modifiedColumns[] = BankSampahPeer::TAHUN_PENDIRIAN;
		}

	} 
	
	public function setSk($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sk !== $v) {
			$this->sk = $v;
			$this->modifiedColumns[] = BankSampahPeer::SK;
		}

	} 
	
	public function setKetua($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ketua !== $v) {
			$this->ketua = $v;
			$this->modifiedColumns[] = BankSampahPeer::KETUA;
		}

	} 
	
	public function setJumlahNasabah($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->jumlah_nasabah !== $v) {
			$this->jumlah_nasabah = $v;
			$this->modifiedColumns[] = BankSampahPeer::JUMLAH_NASABAH;
		}

	} 
	
	public function setOmset($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->omset !== $v) {
			$this->omset = $v;
			$this->modifiedColumns[] = BankSampahPeer::OMSET;
		}

	} 
	
	public function setStatus($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->status !== $v || $v === 0) {
			$this->status = $v;
			$this->modifiedColumns[] = BankSampahPeer::STATUS;
		}

	} 
	
	public function setKeterangan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keterangan !== $v) {
			$this->keterangan = $v;
			$this->modifiedColumns[] = BankSampahPeer::KETERANGAN;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = BankSampahPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = BankSampahPeer::UPDATED_AT;
		}

	} 
	
	public function setIsDeleted($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->is_deleted !== $v || $v === 0) {
			$this->is_deleted = $v;
			$this->modifiedColumns[] = BankSampahPeer::IS_DELETED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->id_wilayah = $rs->getInt($startcol + 1);

			$this->nama = $rs->getString($startcol + 2);

			$this->alamat = $rs->getString($startcol + 3);

			$this->dasar_pendirian = $rs->getString($startcol + 4);

			$this->tanggal_pendirian = $rs->getInt($startcol + 5);

			$this->bulan_pendirian = $rs->getInt($startcol + 6);

			$this->tahun_pendirian = $rs->getInt($startcol + 7);

			$this->sk = $rs->getString($startcol + 8);

			$this->ketua = $rs->getString($startcol + 9);

			$this->jumlah_nasabah = $rs->getInt($startcol + 10);

			$this->omset = $rs->getInt($startcol + 11);

			$this->status = $rs->getInt($startcol + 12);

			$this->keterangan = $rs->getString($startcol + 13);

			$this->created_at = $rs->getTimestamp($startcol + 14, null);

			$this->updated_at = $rs->getTimestamp($startcol + 15, null);

			$this->is_deleted = $rs->getInt($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating BankSampah object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BankSampahPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BankSampahPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(BankSampahPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(BankSampahPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BankSampahPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aWilayah !== null) {
				if ($this->aWilayah->isModified()) {
					$affectedRows += $this->aWilayah->save($con);
				}
				$this->setWilayah($this->aWilayah);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = BankSampahPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BankSampahPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aWilayah !== null) {
				if (!$this->aWilayah->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWilayah->getValidationFailures());
				}
			}


			if (($retval = BankSampahPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BankSampahPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIdWilayah();
				break;
			case 2:
				return $this->getNama();
				break;
			case 3:
				return $this->getAlamat();
				break;
			case 4:
				return $this->getDasarPendirian();
				break;
			case 5:
				return $this->getTanggalPendirian();
				break;
			case 6:
				return $this->getBulanPendirian();
				break;
			case 7:
				return $this->getTahunPendirian();
				break;
			case 8:
				return $this->getSk();
				break;
			case 9:
				return $this->getKetua();
				break;
			case 10:
				return $this->getJumlahNasabah();
				break;
			case 11:
				return $this->getOmset();
				break;
			case 12:
				return $this->getStatus();
				break;
			case 13:
				return $this->getKeterangan();
				break;
			case 14:
				return $this->getCreatedAt();
				break;
			case 15:
				return $this->getUpdatedAt();
				break;
			case 16:
				return $this->getIsDeleted();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BankSampahPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdWilayah(),
			$keys[2] => $this->getNama(),
			$keys[3] => $this->getAlamat(),
			$keys[4] => $this->getDasarPendirian(),
			$keys[5] => $this->getTanggalPendirian(),
			$keys[6] => $this->getBulanPendirian(),
			$keys[7] => $this->getTahunPendirian(),
			$keys[8] => $this->getSk(),
			$keys[9] => $this->getKetua(),
			$keys[10] => $this->getJumlahNasabah(),
			$keys[11] => $this->getOmset(),
			$keys[12] => $this->getStatus(),
			$keys[13] => $this->getKeterangan(),
			$keys[14] => $this->getCreatedAt(),
			$keys[15] => $this->getUpdatedAt(),
			$keys[16] => $this->getIsDeleted(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BankSampahPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIdWilayah($value);
				break;
			case 2:
				$this->setNama($value);
				break;
			case 3:
				$this->setAlamat($value);
				break;
			case 4:
				$this->setDasarPendirian($value);
				break;
			case 5:
				$this->setTanggalPendirian($value);
				break;
			case 6:
				$this->setBulanPendirian($value);
				break;
			case 7:
				$this->setTahunPendirian($value);
				break;
			case 8:
				$this->setSk($value);
				break;
			case 9:
				$this->setKetua($value);
				break;
			case 10:
				$this->setJumlahNasabah($value);
				break;
			case 11:
				$this->setOmset($value);
				break;
			case 12:
				$this->setStatus($value);
				break;
			case 13:
				$this->setKeterangan($value);
				break;
			case 14:
				$this->setCreatedAt($value);
				break;
			case 15:
				$this->setUpdatedAt($value);
				break;
			case 16:
				$this->setIsDeleted($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BankSampahPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdWilayah($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNama($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAlamat($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDasarPendirian($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTanggalPendirian($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setBulanPendirian($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTahunPendirian($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSk($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setKetua($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setJumlahNasabah($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setOmset($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setStatus($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setKeterangan($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedAt($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUpdatedAt($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setIsDeleted($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BankSampahPeer::DATABASE_NAME);

		if ($this->isColumnModified(BankSampahPeer::ID)) $criteria->add(BankSampahPeer::ID, $this->id);
		if ($this->isColumnModified(BankSampahPeer::ID_WILAYAH)) $criteria->add(BankSampahPeer::ID_WILAYAH, $this->id_wilayah);
		if ($this->isColumnModified(BankSampahPeer::NAMA)) $criteria->add(BankSampahPeer::NAMA, $this->nama);
		if ($this->isColumnModified(BankSampahPeer::ALAMAT)) $criteria->add(BankSampahPeer::ALAMAT, $this->alamat);
		if ($this->isColumnModified(BankSampahPeer::DASAR_PENDIRIAN)) $criteria->add(BankSampahPeer::DASAR_PENDIRIAN, $this->dasar_pendirian);
		if ($this->isColumnModified(BankSampahPeer::TANGGAL_PENDIRIAN)) $criteria->add(BankSampahPeer::TANGGAL_PENDIRIAN, $this->tanggal_pendirian);
		if ($this->isColumnModified(BankSampahPeer::BULAN_PENDIRIAN)) $criteria->add(BankSampahPeer::BULAN_PENDIRIAN, $this->bulan_pendirian);
		if ($this->isColumnModified(BankSampahPeer::TAHUN_PENDIRIAN)) $criteria->add(BankSampahPeer::TAHUN_PENDIRIAN, $this->tahun_pendirian);
		if ($this->isColumnModified(BankSampahPeer::SK)) $criteria->add(BankSampahPeer::SK, $this->sk);
		if ($this->isColumnModified(BankSampahPeer::KETUA)) $criteria->add(BankSampahPeer::KETUA, $this->ketua);
		if ($this->isColumnModified(BankSampahPeer::JUMLAH_NASABAH)) $criteria->add(BankSampahPeer::JUMLAH_NASABAH, $this->jumlah_nasabah);
		if ($this->isColumnModified(BankSampahPeer::OMSET)) $criteria->add(BankSampahPeer::OMSET, $this->omset);
		if ($this->isColumnModified(BankSampahPeer::STATUS)) $criteria->add(BankSampahPeer::STATUS, $this->status);
		if ($this->isColumnModified(BankSampahPeer::KETERANGAN)) $criteria->add(BankSampahPeer::KETERANGAN, $this->keterangan);
		if ($this->isColumnModified(BankSampahPeer::CREATED_AT)) $criteria->add(BankSampahPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(BankSampahPeer::UPDATED_AT)) $criteria->add(BankSampahPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(BankSampahPeer::IS_DELETED)) $criteria->add(BankSampahPeer::IS_DELETED, $this->is_deleted);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BankSampahPeer::DATABASE_NAME);

		$criteria->add(BankSampahPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setIdWilayah($this->id_wilayah);

		$copyObj->setNama($this->nama);

		$copyObj->setAlamat($this->alamat);

		$copyObj->setDasarPendirian($this->dasar_pendirian);

		$copyObj->setTanggalPendirian($this->tanggal_pendirian);

		$copyObj->setBulanPendirian($this->bulan_pendirian);

		$copyObj->setTahunPendirian($this->tahun_pendirian);

		$copyObj->setSk($this->sk);

		$copyObj->setKetua($this->ketua);

		$copyObj->setJumlahNasabah($this->jumlah_nasabah);

		$copyObj->setOmset($this->omset);

		$copyObj->setStatus($this->status);

		$copyObj->setKeterangan($this->keterangan);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);

		$copyObj->setIsDeleted($this->is_deleted);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new BankSampahPeer();
		}
		return self::$peer;
	}

	
	public function setWilayah($v)
	{


		if ($v === null) {
			$this->setIdWilayah(NULL);
		} else {
			$this->setIdWilayah($v->getId());
		}


		$this->aWilayah = $v;
	}


	
	public function getWilayah($con = null)
	{
		if ($this->aWilayah === null && ($this->id_wilayah !== null)) {
						include_once 'lib/model/om/BaseWilayahPeer.php';

			$this->aWilayah = WilayahPeer::retrieveByPK($this->id_wilayah, $con);

			
		}
		return $this->aWilayah;
	}

} 