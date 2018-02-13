<?php


abstract class BaseKader extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $id_wilayah;


	
	protected $id_jenis_kader;


	
	protected $nama;


	
	protected $alamat;


	
	protected $rt;


	
	protected $rw;


	
	protected $no_telp;


	
	protected $valid = 0;


	
	protected $status = 0;


	
	protected $keterangan;


	
	protected $created_at;


	
	protected $updated_at;


	
	protected $is_deleted = 0;

	
	protected $aWilayah;

	
	protected $aJenisKader;

	
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

	
	public function getIdJenisKader()
	{

		return $this->id_jenis_kader;
	}

	
	public function getNama()
	{

		return $this->nama;
	}

	
	public function getAlamat()
	{

		return $this->alamat;
	}

	
	public function getRt()
	{

		return $this->rt;
	}

	
	public function getRw()
	{

		return $this->rw;
	}

	
	public function getNoTelp()
	{

		return $this->no_telp;
	}

	
	public function getValid()
	{

		return $this->valid;
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
			$this->modifiedColumns[] = KaderPeer::ID;
		}

	} 
	
	public function setIdWilayah($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_wilayah !== $v) {
			$this->id_wilayah = $v;
			$this->modifiedColumns[] = KaderPeer::ID_WILAYAH;
		}

		if ($this->aWilayah !== null && $this->aWilayah->getId() !== $v) {
			$this->aWilayah = null;
		}

	} 
	
	public function setIdJenisKader($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_jenis_kader !== $v) {
			$this->id_jenis_kader = $v;
			$this->modifiedColumns[] = KaderPeer::ID_JENIS_KADER;
		}

		if ($this->aJenisKader !== null && $this->aJenisKader->getId() !== $v) {
			$this->aJenisKader = null;
		}

	} 
	
	public function setNama($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nama !== $v) {
			$this->nama = $v;
			$this->modifiedColumns[] = KaderPeer::NAMA;
		}

	} 
	
	public function setAlamat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->alamat !== $v) {
			$this->alamat = $v;
			$this->modifiedColumns[] = KaderPeer::ALAMAT;
		}

	} 
	
	public function setRt($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rt !== $v) {
			$this->rt = $v;
			$this->modifiedColumns[] = KaderPeer::RT;
		}

	} 
	
	public function setRw($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rw !== $v) {
			$this->rw = $v;
			$this->modifiedColumns[] = KaderPeer::RW;
		}

	} 
	
	public function setNoTelp($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->no_telp !== $v) {
			$this->no_telp = $v;
			$this->modifiedColumns[] = KaderPeer::NO_TELP;
		}

	} 
	
	public function setValid($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->valid !== $v || $v === 0) {
			$this->valid = $v;
			$this->modifiedColumns[] = KaderPeer::VALID;
		}

	} 
	
	public function setStatus($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->status !== $v || $v === 0) {
			$this->status = $v;
			$this->modifiedColumns[] = KaderPeer::STATUS;
		}

	} 
	
	public function setKeterangan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keterangan !== $v) {
			$this->keterangan = $v;
			$this->modifiedColumns[] = KaderPeer::KETERANGAN;
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
			$this->modifiedColumns[] = KaderPeer::CREATED_AT;
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
			$this->modifiedColumns[] = KaderPeer::UPDATED_AT;
		}

	} 
	
	public function setIsDeleted($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->is_deleted !== $v || $v === 0) {
			$this->is_deleted = $v;
			$this->modifiedColumns[] = KaderPeer::IS_DELETED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->id_wilayah = $rs->getInt($startcol + 1);

			$this->id_jenis_kader = $rs->getInt($startcol + 2);

			$this->nama = $rs->getString($startcol + 3);

			$this->alamat = $rs->getString($startcol + 4);

			$this->rt = $rs->getString($startcol + 5);

			$this->rw = $rs->getString($startcol + 6);

			$this->no_telp = $rs->getString($startcol + 7);

			$this->valid = $rs->getInt($startcol + 8);

			$this->status = $rs->getInt($startcol + 9);

			$this->keterangan = $rs->getString($startcol + 10);

			$this->created_at = $rs->getTimestamp($startcol + 11, null);

			$this->updated_at = $rs->getTimestamp($startcol + 12, null);

			$this->is_deleted = $rs->getInt($startcol + 13);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Kader object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(KaderPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			KaderPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(KaderPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(KaderPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(KaderPeer::DATABASE_NAME);
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

			if ($this->aJenisKader !== null) {
				if ($this->aJenisKader->isModified()) {
					$affectedRows += $this->aJenisKader->save($con);
				}
				$this->setJenisKader($this->aJenisKader);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = KaderPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += KaderPeer::doUpdate($this, $con);
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

			if ($this->aJenisKader !== null) {
				if (!$this->aJenisKader->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aJenisKader->getValidationFailures());
				}
			}


			if (($retval = KaderPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = KaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIdJenisKader();
				break;
			case 3:
				return $this->getNama();
				break;
			case 4:
				return $this->getAlamat();
				break;
			case 5:
				return $this->getRt();
				break;
			case 6:
				return $this->getRw();
				break;
			case 7:
				return $this->getNoTelp();
				break;
			case 8:
				return $this->getValid();
				break;
			case 9:
				return $this->getStatus();
				break;
			case 10:
				return $this->getKeterangan();
				break;
			case 11:
				return $this->getCreatedAt();
				break;
			case 12:
				return $this->getUpdatedAt();
				break;
			case 13:
				return $this->getIsDeleted();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = KaderPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdWilayah(),
			$keys[2] => $this->getIdJenisKader(),
			$keys[3] => $this->getNama(),
			$keys[4] => $this->getAlamat(),
			$keys[5] => $this->getRt(),
			$keys[6] => $this->getRw(),
			$keys[7] => $this->getNoTelp(),
			$keys[8] => $this->getValid(),
			$keys[9] => $this->getStatus(),
			$keys[10] => $this->getKeterangan(),
			$keys[11] => $this->getCreatedAt(),
			$keys[12] => $this->getUpdatedAt(),
			$keys[13] => $this->getIsDeleted(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = KaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIdJenisKader($value);
				break;
			case 3:
				$this->setNama($value);
				break;
			case 4:
				$this->setAlamat($value);
				break;
			case 5:
				$this->setRt($value);
				break;
			case 6:
				$this->setRw($value);
				break;
			case 7:
				$this->setNoTelp($value);
				break;
			case 8:
				$this->setValid($value);
				break;
			case 9:
				$this->setStatus($value);
				break;
			case 10:
				$this->setKeterangan($value);
				break;
			case 11:
				$this->setCreatedAt($value);
				break;
			case 12:
				$this->setUpdatedAt($value);
				break;
			case 13:
				$this->setIsDeleted($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = KaderPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdWilayah($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdJenisKader($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNama($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAlamat($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRw($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNoTelp($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setValid($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatus($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setKeterangan($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedAt($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUpdatedAt($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setIsDeleted($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(KaderPeer::DATABASE_NAME);

		if ($this->isColumnModified(KaderPeer::ID)) $criteria->add(KaderPeer::ID, $this->id);
		if ($this->isColumnModified(KaderPeer::ID_WILAYAH)) $criteria->add(KaderPeer::ID_WILAYAH, $this->id_wilayah);
		if ($this->isColumnModified(KaderPeer::ID_JENIS_KADER)) $criteria->add(KaderPeer::ID_JENIS_KADER, $this->id_jenis_kader);
		if ($this->isColumnModified(KaderPeer::NAMA)) $criteria->add(KaderPeer::NAMA, $this->nama);
		if ($this->isColumnModified(KaderPeer::ALAMAT)) $criteria->add(KaderPeer::ALAMAT, $this->alamat);
		if ($this->isColumnModified(KaderPeer::RT)) $criteria->add(KaderPeer::RT, $this->rt);
		if ($this->isColumnModified(KaderPeer::RW)) $criteria->add(KaderPeer::RW, $this->rw);
		if ($this->isColumnModified(KaderPeer::NO_TELP)) $criteria->add(KaderPeer::NO_TELP, $this->no_telp);
		if ($this->isColumnModified(KaderPeer::VALID)) $criteria->add(KaderPeer::VALID, $this->valid);
		if ($this->isColumnModified(KaderPeer::STATUS)) $criteria->add(KaderPeer::STATUS, $this->status);
		if ($this->isColumnModified(KaderPeer::KETERANGAN)) $criteria->add(KaderPeer::KETERANGAN, $this->keterangan);
		if ($this->isColumnModified(KaderPeer::CREATED_AT)) $criteria->add(KaderPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(KaderPeer::UPDATED_AT)) $criteria->add(KaderPeer::UPDATED_AT, $this->updated_at);
		if ($this->isColumnModified(KaderPeer::IS_DELETED)) $criteria->add(KaderPeer::IS_DELETED, $this->is_deleted);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(KaderPeer::DATABASE_NAME);

		$criteria->add(KaderPeer::ID, $this->id);

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

		$copyObj->setIdJenisKader($this->id_jenis_kader);

		$copyObj->setNama($this->nama);

		$copyObj->setAlamat($this->alamat);

		$copyObj->setRt($this->rt);

		$copyObj->setRw($this->rw);

		$copyObj->setNoTelp($this->no_telp);

		$copyObj->setValid($this->valid);

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
			self::$peer = new KaderPeer();
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

	
	public function setJenisKader($v)
	{


		if ($v === null) {
			$this->setIdJenisKader(NULL);
		} else {
			$this->setIdJenisKader($v->getId());
		}


		$this->aJenisKader = $v;
	}


	
	public function getJenisKader($con = null)
	{
		if ($this->aJenisKader === null && ($this->id_jenis_kader !== null)) {
						include_once 'lib/model/om/BaseJenisKaderPeer.php';

			$this->aJenisKader = JenisKaderPeer::retrieveByPK($this->id_jenis_kader, $con);

			
		}
		return $this->aJenisKader;
	}

} 