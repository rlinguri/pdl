<?php

/*!
 * PHP Dynamic Layouts
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** STRUCTURE CLASSES ***/

class PDLStructureModel extends PDLModel
{

	// protected $table;    // used for internal functions
	// protected $dbs;      // database singleton

	// public $id;          // inherited from PDLOModel
	public $parent;         // integer (element id)
	public $child;          // integer (element id)
	public $layout;         // integer (layout id)

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
		$this->table = 'structure';
				
	} // ./constructor

} // ./class
