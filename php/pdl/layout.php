<?php

/*!
 * PHP Dynamic Layouts
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** LAYOUT CLASSES ***/

class PDLLayoutModel extends PDLModel
{

	// protected $table;    // used for internal functions
	// protected $dbs;      // database singleton

	// public $id;          // inherited from PDLOModel
	public $name;            // HTML tag

	/***
	 * @method: constructor
	 * new object
	 * @param:  void
	 * @return: void
	 */
	public function __construct() {
	
		// instantiate PDL Model
		parent::__construct();
		
		// set the table name for queries
		$this->table = 'layout';
				
	} // ./constructor

} // ./class
