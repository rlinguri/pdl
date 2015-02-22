<?php

/*!
 * PHP Dynamic Layouts
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** PDL ABSTRACT CLASSES AND FRAMEWORK LINKS ***/

class PDLObject
{

	public function __construct() {
	
	}

	/***
	 * @method: setPropertiesWithArray
	 * called for any object
	 * @param:  mixed (assoc array)
	 * @return: void
	 */
	public function setPropertiesWithArray($array) {
	
		if (is_array($array)) {

			// iterate through assoc array to set properties
			foreach ($array as $key => $value) {
			
				// field name should match property name
				$this->$key = $value;
			
			} // ./foreach
		
		} // ./if
		
	} // ./setPropertiesWithArray

}

class PDLModel extends PDLObject
{
	// properties for internal use
	
	protected $table;
	protected $dbs;

	// accessible properties
	
	public $id;

	/***
	 * @method: constructor
	 * called for any model object
	 * @param:  void
	 * @return: void
	 */
	public function __construct() {
	
		parent::__construct();
		
		$this->dbs = PDLDatabase::dbs();
		
	} // ./constructor

	/***
	 * @method: setPropertiesWithId
	 * called for any model object
	 * @param:  integer (record id)
	 * @return: void
	 */
	public function setPropertiesWithId($id) {
	
		// build statement sql
		$sql = 'SELECT * FROM '.$this->table.' WHERE id = '.$id;
		
		// query for the record
		$result = $this->dbs->fetchOne($sql);
		
		$this->setPropertiesWithArray($result);
			
	} // ./setPropertiesWithId

}

class PDLView extends PDLObject
{

	public function __construct() {
	
		parent::__construct();
	
	}

}

class PDLController extends PDLObject
{

	public function __construct() {
	
		parent::__construct();
	
	}

}

require_once('php/pdl/database.php');
require_once('php/pdl/element.php');
require_once('php/pdl/layout.php');

