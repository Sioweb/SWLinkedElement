<?php 

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file autoload.php
* @author Sascha Weidner
* @version 3.1.0
* @package sioweb.contao.extensions.ce
* @copyright Sioweb, Sascha Weidner
* 
*/


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\ce',
));


ClassLoader::addClasses(array
(
	// Classes
	'sioweb\contao\extensions\ce\LinkedElement' => 'system/modules/SWLinkedElement/classes/LinkedElement.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_linkedElement' => 'system/modules/SWLinkedElement/templates'
));