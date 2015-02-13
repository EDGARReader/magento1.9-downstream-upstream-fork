<?php
class SpclOps_CatalogElasticSearch_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() 
	{
		$this->loadLayout('default'));
		$this->renderLayout();
	}
}
