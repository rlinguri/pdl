<?php

/*!
 * PHP Dynamic Layouts
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** APP CLASSES ***/

/***
 * This file is not part of the PDL framework, but demonstrates how to
 * implement the classes, which are in the pdl directory. Feel free to
 * use it as a starting point for your own application.
 */

require_once('php/pdl/pdl.php');

class AppController
{

	private $model;
	private $view;

	public function __construct() {
	
		/** BEGIN TEST LAYOUT **/
		
		$obj = new PDLLayoutModel;
				
		$obj->setPropertiesWithId(2);
		
		print_r($obj);
		
		/** END TEST LAYOUT **/

		$this->model = new AppModel;
		
		$this->view = new AppView($this->model);
	
	}

}

class AppView
{

	

}

class AppModel
{

	

}