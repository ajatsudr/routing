<?php

namespace Modules\View;

class ErrorView {
	
	private $template;
	private $helper;
	
	public function output(\Modules\Model\ErrorModel $model) {
		
		$this->template = new \Modules\Library\Template();
		$this->helper = new \Modules\Library\Helper();
		
		$this->template->assign('baseurl', $this->helper->baseurl);
		$this->template->render('error');
	}
}