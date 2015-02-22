<?php

/*!
 * PHP Data-driven Layout Objects
 * Author: rlinguri@mac.com
 * Copyright 2012-2015 Roderic Linguri
 * Licensed under MIT (https://github.com/rlinguri/pdlo/blob/master/LICENSE)
 */

/*** APPLICATION BOOTSTRAPPER ***/

require_once('config.php');

/** BEGIN test StructureModel **/

// create the structure model
$structureModel = new PDLOStructureModel;

// the top of the tree starts with the zero object
$topElement = array('id' => 0,'parent' => 0,'child' => 0);

// convert array to object properties	
$structureModel->setPropertiesWithArray($topElement);

// this starts a cascade, filling in the structure
$structureModel->populate();

// print_r($structureModel);

/** END test StructureModel **/

$pageViewController = new PDLOPageViewController($structureModel);

echo $pageViewController->htm();