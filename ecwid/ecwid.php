<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/*
   Class: ElementEcwid
       The Ecwid element class (http://www.addthis.com)
*/

class ElementEcwid extends Element {
		
	public function edit() {
	$html = array();
	$html[] = $this->app->html->_('control.editrow', JText::_('ID del producto: '), 	$this->app->html->_('control.text', $this->getControlName('product'), $this->get('product'), 'size="12" maxlength="20"'));
	$html[] = "<br><br>";
	$html[] = $this->app->html->_('control.editrow', JText::_('Precio (euros): '), 	$this->app->html->_('control.text', $this->getControlName('precio'), $this->get('precio'), 'size="4" maxlength="5"'));

	return implode("\n", $html);
	}
	
	public function render($params = array()) {
		
	//$html[] = $this->get('product');
	//$html[] ='--------';
	//$html[] = $this->config->get('account');
	//$html[] ='--------';
	$html[] ='<div class="ecwid-productBrowser-price" style="text-align: center; padding-bottom: 15px">'.$this->get('precio').'</div><div><script type="text/javascript" src="http://app.ecwid.com/script.js?'.$this->config->get('account').'" charset="utf-8"></script><script type="text/javascript">xAddToBag(\'productid='.$this->get('product').'\');</script></div>';
	$html[] ='<hr>';
	return implode("\n", $html);

	}
	
	
	
	
}