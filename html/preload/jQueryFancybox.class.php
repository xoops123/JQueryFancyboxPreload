<?php
/**
 * @file jQueryFancybox.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: jQueryFancybox.class.php ver0.01 2012/11/25  00:00:00 marine  $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class jQueryFancybox extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{
		$jQuery->addLibrary('/common/fancybox/jquery.easing.compatibility.js', true);
		$jQuery->addLibrary('/common/fancybox/jquery.mousewheel-3.0.4.pack.js', true);
		$jQuery->addLibrary('/common/fancybox/jquery.fancybox-1.3.4.pack.js', true);
		$jQuery->addStylesheet('/common/fancybox/jquery.fancybox-1.3.4.css', true);
		$jQuery->addLibrary('/common/fancybox/jQueryFancybox.4preload.js', true);

	}
//class END
}
?>