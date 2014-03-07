<?php 

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

/**
* @file tl_content.php
* @author Sascha Weidner
* @version 3.1.0
* @package sioweb.contao.extensions.ce
* @copyright Sascha Weidner, Sioweb
* 
*/


foreach($GLOBALS['TL_DCA']['tl_content']['palettes'] as $pKey => &$palette)
{
	if(!is_array($palette))
	{
		$palette = preg_replace('/(\{type_legend\},[^;]+);/is','$1,linkedElement;',$palette);
	}
}

$GLOBALS['TL_DCA']['tl_content']['fields']['linkedElement'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['linkedElement'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
	'wizard' => array
	(
		array('tl_content', 'pagePicker')
	),
	'sql'                     => "varchar(255) NOT NULL default ''"
);