<?php


abstract class BaseBankSampahPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'bank_sampah';

	
	const CLASS_DEFAULT = 'lib.model.BankSampah';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'bank_sampah.ID';

	
	const ID_WILAYAH = 'bank_sampah.ID_WILAYAH';

	
	const NAMA = 'bank_sampah.NAMA';

	
	const ALAMAT = 'bank_sampah.ALAMAT';

	
	const DASAR_PENDIRIAN = 'bank_sampah.DASAR_PENDIRIAN';

	
	const TANGGAL_PENDIRIAN = 'bank_sampah.TANGGAL_PENDIRIAN';

	
	const BULAN_PENDIRIAN = 'bank_sampah.BULAN_PENDIRIAN';

	
	const TAHUN_PENDIRIAN = 'bank_sampah.TAHUN_PENDIRIAN';

	
	const SK = 'bank_sampah.SK';

	
	const KETUA = 'bank_sampah.KETUA';

	
	const JUMLAH_NASABAH = 'bank_sampah.JUMLAH_NASABAH';

	
	const OMSET = 'bank_sampah.OMSET';

	
	const STATUS = 'bank_sampah.STATUS';

	
	const KETERANGAN = 'bank_sampah.KETERANGAN';

	
	const CREATED_AT = 'bank_sampah.CREATED_AT';

	
	const UPDATED_AT = 'bank_sampah.UPDATED_AT';

	
	const IS_DELETED = 'bank_sampah.IS_DELETED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IdWilayah', 'Nama', 'Alamat', 'DasarPendirian', 'TanggalPendirian', 'BulanPendirian', 'TahunPendirian', 'Sk', 'Ketua', 'JumlahNasabah', 'Omset', 'Status', 'Keterangan', 'CreatedAt', 'UpdatedAt', 'IsDeleted', ),
		BasePeer::TYPE_COLNAME => array (BankSampahPeer::ID, BankSampahPeer::ID_WILAYAH, BankSampahPeer::NAMA, BankSampahPeer::ALAMAT, BankSampahPeer::DASAR_PENDIRIAN, BankSampahPeer::TANGGAL_PENDIRIAN, BankSampahPeer::BULAN_PENDIRIAN, BankSampahPeer::TAHUN_PENDIRIAN, BankSampahPeer::SK, BankSampahPeer::KETUA, BankSampahPeer::JUMLAH_NASABAH, BankSampahPeer::OMSET, BankSampahPeer::STATUS, BankSampahPeer::KETERANGAN, BankSampahPeer::CREATED_AT, BankSampahPeer::UPDATED_AT, BankSampahPeer::IS_DELETED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'id_wilayah', 'nama', 'alamat', 'dasar_pendirian', 'tanggal_pendirian', 'bulan_pendirian', 'tahun_pendirian', 'sk', 'ketua', 'jumlah_nasabah', 'omset', 'status', 'keterangan', 'created_at', 'updated_at', 'is_deleted', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdWilayah' => 1, 'Nama' => 2, 'Alamat' => 3, 'DasarPendirian' => 4, 'TanggalPendirian' => 5, 'BulanPendirian' => 6, 'TahunPendirian' => 7, 'Sk' => 8, 'Ketua' => 9, 'JumlahNasabah' => 10, 'Omset' => 11, 'Status' => 12, 'Keterangan' => 13, 'CreatedAt' => 14, 'UpdatedAt' => 15, 'IsDeleted' => 16, ),
		BasePeer::TYPE_COLNAME => array (BankSampahPeer::ID => 0, BankSampahPeer::ID_WILAYAH => 1, BankSampahPeer::NAMA => 2, BankSampahPeer::ALAMAT => 3, BankSampahPeer::DASAR_PENDIRIAN => 4, BankSampahPeer::TANGGAL_PENDIRIAN => 5, BankSampahPeer::BULAN_PENDIRIAN => 6, BankSampahPeer::TAHUN_PENDIRIAN => 7, BankSampahPeer::SK => 8, BankSampahPeer::KETUA => 9, BankSampahPeer::JUMLAH_NASABAH => 10, BankSampahPeer::OMSET => 11, BankSampahPeer::STATUS => 12, BankSampahPeer::KETERANGAN => 13, BankSampahPeer::CREATED_AT => 14, BankSampahPeer::UPDATED_AT => 15, BankSampahPeer::IS_DELETED => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_wilayah' => 1, 'nama' => 2, 'alamat' => 3, 'dasar_pendirian' => 4, 'tanggal_pendirian' => 5, 'bulan_pendirian' => 6, 'tahun_pendirian' => 7, 'sk' => 8, 'ketua' => 9, 'jumlah_nasabah' => 10, 'omset' => 11, 'status' => 12, 'keterangan' => 13, 'created_at' => 14, 'updated_at' => 15, 'is_deleted' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/BankSampahMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.BankSampahMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = BankSampahPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(BankSampahPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(BankSampahPeer::ID);

		$criteria->addSelectColumn(BankSampahPeer::ID_WILAYAH);

		$criteria->addSelectColumn(BankSampahPeer::NAMA);

		$criteria->addSelectColumn(BankSampahPeer::ALAMAT);

		$criteria->addSelectColumn(BankSampahPeer::DASAR_PENDIRIAN);

		$criteria->addSelectColumn(BankSampahPeer::TANGGAL_PENDIRIAN);

		$criteria->addSelectColumn(BankSampahPeer::BULAN_PENDIRIAN);

		$criteria->addSelectColumn(BankSampahPeer::TAHUN_PENDIRIAN);

		$criteria->addSelectColumn(BankSampahPeer::SK);

		$criteria->addSelectColumn(BankSampahPeer::KETUA);

		$criteria->addSelectColumn(BankSampahPeer::JUMLAH_NASABAH);

		$criteria->addSelectColumn(BankSampahPeer::OMSET);

		$criteria->addSelectColumn(BankSampahPeer::STATUS);

		$criteria->addSelectColumn(BankSampahPeer::KETERANGAN);

		$criteria->addSelectColumn(BankSampahPeer::CREATED_AT);

		$criteria->addSelectColumn(BankSampahPeer::UPDATED_AT);

		$criteria->addSelectColumn(BankSampahPeer::IS_DELETED);

	}

	const COUNT = 'COUNT(bank_sampah.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT bank_sampah.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BankSampahPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BankSampahPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = BankSampahPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = BankSampahPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return BankSampahPeer::populateObjects(BankSampahPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			BankSampahPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = BankSampahPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinWilayah(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BankSampahPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BankSampahPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BankSampahPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = BankSampahPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinWilayah(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BankSampahPeer::addSelectColumns($c);
		$startcol = (BankSampahPeer::NUM_COLUMNS - BankSampahPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		WilayahPeer::addSelectColumns($c);

		$c->addJoin(BankSampahPeer::ID_WILAYAH, WilayahPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BankSampahPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = WilayahPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getWilayah(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addBankSampah($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBankSampahs();
				$obj2->addBankSampah($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BankSampahPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BankSampahPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BankSampahPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = BankSampahPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BankSampahPeer::addSelectColumns($c);
		$startcol2 = (BankSampahPeer::NUM_COLUMNS - BankSampahPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		WilayahPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + WilayahPeer::NUM_COLUMNS;

		$c->addJoin(BankSampahPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BankSampahPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = WilayahPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getWilayah(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addBankSampah($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initBankSampahs();
				$obj2->addBankSampah($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return BankSampahPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(BankSampahPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(BankSampahPeer::ID);
			$selectCriteria->add(BankSampahPeer::ID, $criteria->remove(BankSampahPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(BankSampahPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(BankSampahPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof BankSampah) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(BankSampahPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(BankSampah $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(BankSampahPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(BankSampahPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(BankSampahPeer::DATABASE_NAME, BankSampahPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = BankSampahPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(BankSampahPeer::DATABASE_NAME);

		$criteria->add(BankSampahPeer::ID, $pk);


		$v = BankSampahPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(BankSampahPeer::ID, $pks, Criteria::IN);
			$objs = BankSampahPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseBankSampahPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/BankSampahMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.BankSampahMapBuilder');
}
