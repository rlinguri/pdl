<?php

/*!
 * PHP Dynamic Layouts
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** DATABASE CLASSES ***/

PDLDatabase extends PDLObject
{

	private static $dbs;
	private $pdo;
	
	/**
	* @method: constructor
	* @descr:  create PDO database singleton
	* @param:  void
	* @return: void
	*/
	public function __construct() {
	
		parent::__construct();
		
		$this->pdo = new PDO('sqlite:dba/pdl.db');
	
	} // ./constructor

	/**
	* @method: database
	* @descr:  provides static access to this class
	* @param:  void
	* @return: object of class PDLDatabase
	*/
	public static function dbs() {
	
		if (!self::$dbs) {
		
			self::$dbs = new self();
			
		} // ./if no database
		
		return self::$dbs;
		
	} // ./dbs
	
	/**
	* @method: clone
	* @descr:  prevents duplication
	* @param:  void
	* @return: void
	*/
	private function __clone() { }
	
	/**
	* @method: pdo
	* @descr:  provides access to the opened pdo connection
	* @param:  void
	* @return: PDO object
	*/
	public function pdo() {
	
		return $this->pdo;
		
	} // ./pdo

} // ./class

