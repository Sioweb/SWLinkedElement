<?php 

/*
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 */

namespace sioweb\contao\extensions\ce;
use Contao;

/**
* @file LinkedArticle.php
* @class LinkedArticle
* @author Sascha Weidner
* @version 3.1.0
* @package sioweb.contao.extensions.ce
* @copyright Sioweb, Sascha Weidner
* 
*/


class LinkedElement extends \Frontend
{
	public function modifyElement($objElement, $strBuffer)
	{
		
		if($objElement->linkedElement)
		{
			$elementObject = new \FrontendTemplate('ce_linkedElement');
			$elementObject->setData($objElement->row());
			
			$elementObject->element = preg_replace('/<a([^>]*)>([^<]*)\<\/a>/is','<span$1>$2</span>',$strBuffer);
			
			$elementObject->element = preg_replace('/<span([^h]*)href[^=]*=[^"]*"[^"]*"([^>]*)>/is','<span$1$2>',$elementObject->element);
			$elementObject->element = preg_replace('/<span([^h]*)name[^=]*=[^"]*"[^"]*"([^>]*)>/is','<span$1$2>',$elementObject->element);
			$elementObject->element = preg_replace('/<span([^h]*)target[^=]*=[^"]*"[^"]*"([^>]*)>/is','<span$1$2>',$elementObject->element);
			$elementObject->element = preg_replace('/<span([^h]*)rel[^=]*=[^"]*"[^"]*"([^>]*)>/is','<span$1$2>',$elementObject->element);
			
			$strBuffer = $elementObject->parse();
		}
		
		return $strBuffer;
	}
}